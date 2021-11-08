<?php 
class Cms5e18cc1c66410109189833_02319218a3f250ba5274709b664c2dacClass extends Cms\Classes\PageCode
{
public function onStart() {
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::to('dashboard/settings');
    }

    $this->page->stretch        = true;


    $this['order']      =   $order  =   \Spot\Shipment\Models\Order::find($this->param('id'));


    switch (Auth::getUser()->role_id) {
        case 6:
            if(!in_array($order->office_id, Auth::getUser()->manage->pluck('id')->toArray())){
                \Flash::error($this['theme_lang']['not_allowed']);
                return Redirect::to('dashboard/shipments/');
            }
            break;
        case 5:
            if($order->sender_id != Auth::getUser()->id && $order->receiver_id != Auth::getUser()->id){
                \Flash::error($this['theme_lang']['not_allowed']);
                return Redirect::to('dashboard/shipments/');
            }
            break;
        case 4:
            if(Auth::getUser()->is_superuser){
                if($order->office_id != Auth::getUser()->office){
                    \Flash::error($this['theme_lang']['not_allowed']);
                    return Redirect::to('dashboard/shipments/');
                }
            }else{
                if($order->assigned_id != Auth::getUser()->id){
                    if($order->manifest_id != null){
                        if($order->driver_id != Auth::getUser()->id && $order->employee_id != Auth::getUser()->id){
                            \Flash::error($this['theme_lang']['not_allowed']);
                            return Redirect::to('dashboard/shipments/');
                        }
                    }else{
                        \Flash::error($this['theme_lang']['not_allowed']);
                        return Redirect::to('dashboard/shipments/');
                    }
                }
            }
            break;
        case 3:
            $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
            if(!in_array($order->assigned_id, $employees)){
                if($order->manifest_id != null){
                    if(!in_array($order->driver_id, $employees) && !in_array($order->employee_id, $employees)){
                        \Flash::error($this['theme_lang']['not_allowed']);
                        return Redirect::to('dashboard/shipments/');
                    }
                }else{
                    \Flash::error($this['theme_lang']['not_allowed']);
                    return Redirect::to('dashboard/shipments/');
                }
            }
            break;
    }

    $this['primary_currency']=   \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first();
    $this['employees']      =   \RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
    $this['packaging']      =   \Spot\Shipment\Models\Packaging::select('id','name')->get();
    $this['modes']          =   \Spot\Shipment\Models\Mode::select('id','name')->get();
    $this['couriers']       =   \Spot\Shipment\Models\Courier::select('id','name')->get();
    $this['deliverytimes']  =   \Spot\Shipment\Models\DeliveryTime::select('id','name')->get();
    $this['offices']        =   \Spot\Shipment\Models\Office::select('id','name')->get();
    $this['categories']     =   \Spot\Shipment\Models\Category::select('id','name')->get();
    $this['countries']      =   \RainLab\Location\Models\Country::select('id','name')->where('is_enabled', 1)->get();
    $this['states']         =   \RainLab\Location\Models\State::select('id','name')->get();
    $this['cities']         =   \Spot\Shipment\Models\City::select('id','name')->get();
    $this['areas']          =   \Spot\Shipment\Models\Area::select('id','name')->get();
    $this['statuses']       =   \Spot\Shipment\Models\Status::select('id','name')->get();
    $this['max']            =   \Spot\Shipment\Models\Order::max('number')+1;
}
public function onSave()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();
    if(Auth::getUser()->role_id != 5){
        $prev   =   \Spot\Shipment\Models\Order::where('number', $data['number'])->where('id', '!=', $this->param('id'))->first();
        if($prev){
            throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
        }
    }

    $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));

    if(isset($data['sender_id']) && $data['sender_id'] != ''){
        $item->sender_id        = htmlspecialchars($data['sender_id']);
    }
    if(isset($data['sender_address_id']) && $data['sender_address_id'] != ''){
        $item->sender_address_id= htmlspecialchars($data['sender_address_id']);
    }
    $item->type             = htmlspecialchars($data['type']);
    $item->packaging_id     = htmlspecialchars($data['packaging_id']);
    if(isset($data['office_id']) && $data['office_id'] != ''){
        $item->office_id        = htmlspecialchars($data['office_id']);
    }
    $item->ship_date        = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));
    $shipdate               = \Carbon\Carbon::parse($item->ship_date);
    $deliverydate           = $shipdate->addHours($item->deliverytime->count);
    $item->delivery_date    = $deliverydate;

    if($data['type']    ==  2){
        $item->receiver_id      = htmlspecialchars($data['receiver_id']);
        $item->receiver_address_id= htmlspecialchars($data['receiver_address_id']);
    }
    $item->payment_type     = htmlspecialchars($data['payment_type']);
    if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
        if(isset($data['return_defray']) && $data['return_defray'] != ''){
            $item->return_defray    = htmlspecialchars($data['return_defray']);
        }
        if(isset($data['package_fee']) && $data['package_fee'] != ''){
            $item->package_fee      = htmlspecialchars($data['package_fee']);
        }
        if(isset($data['return_package_fee']) && $data['return_package_fee'] != ''){
            $item->return_package_fee= htmlspecialchars($data['return_package_fee']);
        }
        if(isset($data['return_courier_fee']) && $data['return_courier_fee'] != ''){
            $item->return_courier_fee= htmlspecialchars($data['return_courier_fee']);
        }
    }
    if(isset($data['number']) && $data['number'] != ''){
        $item->number           = htmlspecialchars($data['number']);
    }
    if(isset($data['tax']) && $data['tax'] != ''){
        $item->tax              = htmlspecialchars($data['tax']);
    }
    if(isset($data['insurance']) && $data['insurance'] != ''){
        $item->insurance        = htmlspecialchars($data['insurance']);
    }
    if(isset($data['mode_id']) && $data['mode_id'] != ''){
        $item->mode_id          = htmlspecialchars($data['mode_id']);
    }
    if(isset($data['customs_value']) && $data['customs_value'] != ''){
        $item->customs_value    = htmlspecialchars($data['customs_value']);
    }
    if(isset($data['courier_id']) && $data['courier_id'] != ''){
        $item->courier_id       = htmlspecialchars($data['courier_id']);
    }
    if(isset($data['courier_fee']) && $data['courier_fee'] != ''){
        $item->courier_fee      = htmlspecialchars($data['courier_fee']);
    }
    if(isset($data['delivery_time_id']) && $data['delivery_time_id'] != ''){
        $item->delivery_time_id = htmlspecialchars($data['delivery_time_id']);
    }
    if(isset($data['status_id']) && $data['status_id'] != ''){
        $item->status_id        = htmlspecialchars($data['status_id']);
    }
    if(isset($data['assigned_id']) && $data['assigned_id'] != ''){
        $item->assigned_id  = htmlspecialchars($data['assigned_id']);
    }


    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    if(isset($data['items']) && $data['items'] != '' && !empty($data['items'])){
        foreach($data['items'] as $shipping_item){
            if(isset($shipping_item['id'])){
                $subitem                    = \Spot\Shipment\Models\Item::find($shipping_item['id']);
                $subitem->category_id       = htmlspecialchars($shipping_item['category_id']);
                $subitem->description       = htmlspecialchars($shipping_item['description']);
                $subitem->quantity          = htmlspecialchars($shipping_item['quantity']);
                $subitem->weight            = htmlspecialchars($shipping_item['weight']);
                $subitem->length            = htmlspecialchars($shipping_item['length']);
                $subitem->width             = htmlspecialchars($shipping_item['width']);
                $subitem->height            = htmlspecialchars($shipping_item['height']);
                $subitem->update();
            }else{
                $subitem                    = new \Spot\Shipment\Models\Item;
                $subitem->order_id          = $item->id;
                $subitem->category_id       = htmlspecialchars($shipping_item['category_id']);
                $subitem->description       = htmlspecialchars($shipping_item['description']);
                $subitem->quantity          = htmlspecialchars($shipping_item['quantity']);
                $subitem->weight            = htmlspecialchars($shipping_item['weight']);
                $subitem->length            = htmlspecialchars($shipping_item['length']);
                $subitem->width             = htmlspecialchars($shipping_item['width']);
                $subitem->height            = htmlspecialchars($shipping_item['height']);
                $subitem->save();
            }
        }
    }


    $event_data =   array(
        'sender'    =>  Auth::getUser(),
        'item'      =>  $item,
        'type'      =>  'update_shipment',
        'thumb'     =>  'icon',
        'icon'      =>  'flaticon-gift',
        'subject'   =>  $this['theme_lang']['update_shipment'],
        'message'   =>  $this['theme_lang']['update_shipment'],
        'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'     =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onGetclients()
{
    $data = post();
    $item = '';
    $array = array();
    if(isset($data['term']) && $data['term'] != ''){
        $item = $data['term'];
        $items = \RainLab\User\Models\User::where('role_id', 5)
                    ->where(function($q) use($item){
                        $q->where('id', 'like', "%$item%");
                        $q->orWhere('name', 'like', "%$item%");
                        $q->orWhere('username', 'like', "%$item%");
                        $q->orWhere('email', 'like', "%$item%");
                        $q->orWhere('phone', 'like', "%$item%");
                        $q->orWhere('mobile', 'like', "%$item%");
                    })
                    ->get();

        $array = array();
        foreach($items as $item){
            $array[] = array("id"=>$item->id, "text"=>$item->name, "mobile"=>$item->mobile);
        }
    }
    if(Auth::getUser()->hasUserPermission(["client"],'c')) {
        $array[] = array("id"=>'new', "text"=>'<i class="flaticon2-add"></i>&nbsp;'.$this['theme_lang']['add_new']);
    }
    return $array;
}
public function onNewclient(){
    $data = post();
    if(isset($data['connect'])){
        \RainLab\User\Models\User::extend(function($model){
            $myrules['email'] = 'required|between:6,255|email|unique:users';
            $myrules['mobile'] = 'required|unique:users';
            $myrules['username'] = 'required|between:2,255|unique:users';
            $myrules['password'] = 'required';
            $model->rules = $myrules;
            $model->customMessages['mobile.unique'] = $this['theme_lang']['mobile_already_registered'];
            $model->customMessages['email.unique'] = $this['theme_lang']['email_already_registered'];
            $model->customMessages['username.unique'] = $this['theme_lang']['username_already_registered'];
        });
    }else{
        \RainLab\User\Models\User::extend(function($model){
            $myrules['mobile'] = 'required|unique:users';
            $myrules['password'] = 'required';
            $model->rules = $myrules;
            $model->customMessages['mobile.mobile'] = $this['theme_lang']['mobile_already_registered'];
        });
    }

    $item                   = new \RainLab\User\Models\User;
    $item->name             = htmlspecialchars($data['name']);
    if(isset($data['connect'])){
        $item->username         = htmlspecialchars($data['username']);
        $item->email            = htmlspecialchars($data['email']);
        if(isset($data['password']) && $data['password'] != null && !empty($data['password']) && $data['password'] != ''){
            $password                       = \Hash::make($data['password']);
            $item->password                 = $password;
            $item->password_confirmation    = $password;
        }
    }else{
        $password                       = \Hash::make(123);
        $item->password                 = $password;
        $item->password_confirmation    = $password;
    }
    $item->mobile           = htmlspecialchars($data['mobile']);
    $item->gender           = (isset($data['gender']) ? $data['gender'] : null);
    $item->role_id          = 5;
    $item->created_at       = \Carbon\Carbon::now();
    $item->updated_at       = \Carbon\Carbon::now();
    $item->save();

    $subitem                    = new \Spot\Shipment\Models\Address;
    $subitem->user_id           = $item->id;
    $subitem->name              = htmlspecialchars($data['street_addr']);
    $subitem->street            = htmlspecialchars($data['street_addr']);
    $subitem->lat               = htmlspecialchars($data['lat']);
    $subitem->lng               = htmlspecialchars($data['lng']);
    $subitem->url               = htmlspecialchars($data['url']);
    $subitem->county            = htmlspecialchars($data['area_id']);
    $subitem->city              = htmlspecialchars($data['city_id']);
    $subitem->zipcode           = htmlspecialchars($data['postal_code']);
    $subitem->state             = htmlspecialchars($data['state_id']);
    $subitem->county            = htmlspecialchars($data['country_id']);
    $subitem->default           = 1;
    $subitem->created_at        = \Carbon\Carbon::now();
    $subitem->updated_at        = \Carbon\Carbon::now();
    $subitem->save();

    return array("id"=>$item->id, "name"=>$item->name, 'address_id' => $subitem->id, 'address_name' => $subitem->name);
}
public function onNewclientaddress(){
    $data = post();

    \Spot\Shipment\Models\Address::where('user_id', $data['client_id'])->update(['default' => 0]);

    $subitem                    = new \Spot\Shipment\Models\Address;
    $subitem->user_id           = htmlspecialchars($data['client_id']);
    $subitem->name              = htmlspecialchars($data['street_addr']);
    $subitem->street            = htmlspecialchars($data['street_addr']);
    $subitem->lat               = htmlspecialchars($data['lat']);
    $subitem->lng               = htmlspecialchars($data['lng']);
    $subitem->url               = htmlspecialchars($data['url']);
    $subitem->county            = htmlspecialchars($data['area_id']);
    $subitem->city              = htmlspecialchars($data['city_id']);
    $subitem->zipcode           = htmlspecialchars($data['postal_code']);
    $subitem->state             = htmlspecialchars($data['state_id']);
    $subitem->county            = htmlspecialchars($data['country_id']);
    $subitem->default           = 1;
    $subitem->created_at        = \Carbon\Carbon::now();
    $subitem->updated_at        = \Carbon\Carbon::now();
    $subitem->save();

    $addresses = \Spot\Shipment\Models\Address::where('user_id', $data['client_id'])->get();
    $html = '<option data-hidden="true"></option>';
    $default = 'new';
    if($addresses){
        foreach($addresses as $address){
            if($address->default == 1){
                $default = $address->id;
            }
            $html .= '<option value="'.$address->id.'">'.$address->name.'</option>';
        }
    }
    if(Auth::getUser()->hasUserPermission(["client"],'c')) {
        $html .= '<option value="new" data-icon="flaticon2-add">'.$this['theme_lang']['add_new'].'</option>';
    }
    return array("html" => $html, "default" => $default);
}
public function onClientaddresses(){
    $data = post();

    $addresses = \Spot\Shipment\Models\Address::where('user_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    $default = 'new';
    if($addresses){
        foreach($addresses as $address){
            if($address->default == 1){
                $default = $address->id;
            }
            $html .= '<option value="'.$address->id.'">'.$address->name.'</option>';
        }
    }
    if(Auth::getUser()->hasUserPermission(["client"],'c')) {
        $html .= '<option value="new" data-icon="flaticon2-add">'.$this['theme_lang']['add_new'].'</option>';
    }
    return array("html" => $html, "default" => $default);
}
public function onListstates(){
    $data = post();

    $items = \RainLab\Location\Models\State::where('country_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    if($items){
        foreach($items as $item){
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }
    return array("html" => $html);
}
public function onListcities(){
    $data = post();

    $items = \Spot\Shipment\Models\City::where('state_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    if($items){
        foreach($items as $item){
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }
    return array("html" => $html);
}
public function onListareas(){
    $data = post();

    $items = \Spot\Shipment\Models\Area::where('city_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    if($items){
        foreach($items as $item){
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }
    return array("html" => $html);
}
}
