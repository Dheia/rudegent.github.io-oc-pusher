<?php 
class Cms5e18cc2a94f0a387446010_acd2310154447bf3b7bdd1dfc65fea25Class extends Cms\Classes\PageCode
{
public function onStart() {
    if(!Auth::getUser()->hasUserPermission(["order"],'c')) {
        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::to('dashboard/settings');
    }

    $this->page->stretch        = true;

    $this['primary_currency']=   \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first();
    $this['employees']      =   \RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
    $this['packaging']      =   \Spot\Shipment\Models\Packaging::select('id','name')->get();
    $this['modes']          =   \Spot\Shipment\Models\Mode::select('id','name')->get();
    $this['couriers']       =   \Spot\Shipment\Models\Courier::select('id','name')->get();
    $this['deliverytimes']  =   \Spot\Shipment\Models\DeliveryTime::select('id','name')->get();
    $this['offices']        =   \Spot\Shipment\Models\Office::select('id','name')->get();
    $this['categories']     =   \Spot\Shipment\Models\Category::select('id','name')->get();
    $this['countries']      =   \RainLab\Location\Models\Country::select('id','name')->where('is_enabled', 1)->get();
    $this['states']         =   \RainLab\Location\Models\State::whereHas('country',function($q){$q->where('is_enabled', 1);})->select('id','name')->get();
    $this['cities']         =   \Spot\Shipment\Models\City::select('id','name')->get();
    $this['areas']          =   \Spot\Shipment\Models\Area::select('id','name')->get();
    $this['statuses']       =   \Spot\Shipment\Models\Status::select('id','name')->get();
    $this['max']            =   \Spot\Shipment\Models\Order::max('number')+1;
}
public function onSave()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'c')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();

    if(Auth::getUser()->role_id == 5){
        $number = '';
        for($x = 0; $x <= $this['settings']['tracking']['numbers_order']; $x++){
            $number .= '0';
        }
        $number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
        $number = substr($number, -$this['settings']['tracking']['numbers_order']);

        $data['number']                 =   $number;

        $data['sender_id']              =   Auth::getUser()->id;

        if($data['type']   ==   1) {
            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
        }else{
            $delivery_cost  =   $this['settings']['fees']['delivery_cost'];
        }
        $return_courier_fee     =   null;

        if(isset($data['return_defray']) && $data['return_defray'] != ''){
            if($data['return_package_fee']  ==  1){
                $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
            }else{
                $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
            }
        }

        if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '') {
            $sender_address_id      =   \Spot\Shipment\Models\Address::find($data['sender_address_id']);
            $receiver_address_id    =   \Spot\Shipment\Models\Address::find($data['receiver_address_id']);

            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
            if(!$fees){
                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                    if(!$fees){
                        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                    }
                }
            }

            if($fees){
                if($data['type']   ==   1) {
                    $delivery_cost  =   $fees->pickup_cost;
                }else{
                    $delivery_cost  =   $fees->delivery_cost;
                }
                if($fees->packaging == 1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
                    foreach($fees->packaging_fees as $package_fee   =>  $value){
                        if($package_fee ==  $data['packaging_id']){
                            $delivery_cost  +=   $value;
                        }
                    }
                }
                if(isset($data['return_defray']) && $data['return_defray'] != ''){
                    if($data['return_package_fee']  ==  1){
                        $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                    }else{
                        $return_courier_fee  =   $fees->delivery_cost_back_sender;
                    }
                }
            }

        }

        $data['return_courier_fee']     =   $return_courier_fee;
        $data['courier_fee']            =   $delivery_cost;
        $data['tax']                    =   $this['settings']['taxes']['percent'];
        $data['insurance']              =   $this['settings']['taxes']['insurance'];
        $data['customs_value']          =   0;
        $data['status_id']              =   $this['settings']['tracking']['default_status'];
        $data['delivery_time_id']       =   $this['settings']['tracking']['default_deliverytime'];
    }

    $prev   =   \Spot\Shipment\Models\Order::where('number', $data['number'])->first();
    if($prev){
        throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
    }

    $item                   = new \Spot\Shipment\Models\Order;
    $item->sender_id        = htmlspecialchars($data['sender_id']);
    $item->sender_address_id= htmlspecialchars($data['sender_address_id']);
    $item->type             = htmlspecialchars($data['type']);
    $item->packaging_id     = htmlspecialchars($data['packaging_id']);
    $item->office_id        = htmlspecialchars($data['office_id']);
    $item->ship_date        = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));

    if($data['type']    ==  2 or $data['show_receiver_info'] == 1){
        $item->receiver_id      = htmlspecialchars($data['receiver_id']);
        $item->receiver_address_id= htmlspecialchars($data['receiver_address_id']);
    }
    $item->payment_type     = htmlspecialchars($data['payment_type']);
    if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
        $item->return_defray    = htmlspecialchars($data['return_defray']);
        $item->package_fee      = htmlspecialchars($data['package_fee']);
        $item->return_package_fee= htmlspecialchars($data['return_package_fee']);
        $item->return_courier_fee= htmlspecialchars($data['return_courier_fee']);
    }
    $item->number           = htmlspecialchars($data['number']);
    $item->tax              = htmlspecialchars($data['tax']);
    $item->insurance        = htmlspecialchars($data['insurance']);
    if(isset($data['mode_id']) && $data['mode_id'] != ''){
        $item->mode_id          = htmlspecialchars($data['mode_id']);
    }
    $item->customs_value    = htmlspecialchars($data['customs_value']);
    if(isset($data['courier_id']) && $data['courier_id'] != ''){
        $item->courier_id       = htmlspecialchars($data['courier_id']);
    }
    $item->courier_fee      = htmlspecialchars($data['courier_fee']);
    $item->delivery_time_id = htmlspecialchars($data['delivery_time_id']);
    $item->status_id        = htmlspecialchars($data['status_id']);
    if(isset($data['assigned_id']) && $data['assigned_id'] != ''){
        $item->assigned_id  = htmlspecialchars($data['assigned_id']);
    }
    $item->currency_id      = \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first()->id;
    $item->channel          = 'backend';
    $item->created_at       = \Carbon\Carbon::now();
    $item->updated_at       = \Carbon\Carbon::now();
    $item->barcode          = htmlspecialchars($data['number']);
    $item->save();

    if(isset($data['sender']) && Auth::getUser()->role_id == 5){
        \RainLab\User\Models\User::where('id', Auth::getUser()->id)->update(['mobile' => $data['sender_mobile']]);
    }

    $shipdate               = \Carbon\Carbon::parse($item->ship_date);
    $deliverydate           = $shipdate->addHours($item->deliverytime->count);
    $item->delivery_date    = $deliverydate;
    $item->update();

    if(isset($data['items']) && $data['items'] != '' && !empty($data['items'])){
        foreach($data['items'] as $shipping_item){
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


    $event_data =   array(
        'sender'    =>  Auth::getUser(),
        'item'      =>  $item,
        'type'      =>  'new_shipments',
        'thumb'     =>  'icon',
        'icon'      =>  'flaticon-gift',
        'subject'   =>  $this['theme_lang']['new_shipments'],
        'message'   =>  $this['theme_lang']['new_shipments'],
        'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'     =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'created';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();


    /*
        if($item->payment_type  ==  2){

            if($item->customs_value != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'customs';
                $payment->item_id           = $item->id;
                if($item->receiver_id){
                    $payment->for_id            = $item->receiver_id;
                    $payment->payment_with      = $item->receiver_id;
                }
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.$item->customs_value;
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->tax != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'tax';
                $payment->item_id           = $item->id;
                if($item->receiver_id){
                    $payment->for_id            = $item->receiver_id;
                    $payment->payment_with      = $item->receiver_id;
                }
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.($item->tax*$item->courier_fee/100);
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->insurance != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'insurance';
                $payment->item_id           = $item->id;
                if($item->receiver_id){
                    $payment->for_id            = $item->receiver_id;
                    $payment->payment_with      = $item->receiver_id;
                }
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.($item->insurance*$item->courier_fee/100);
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->return_defray && $item->return_package_fee == 2){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'package_fee';
                $payment->item_id           = $item->id;
                if($item->receiver_id){
                    $payment->for_id            = $item->receiver_id;
                    $payment->payment_with      = $item->receiver_id;
                }
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.$item->package_fee;
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'return_package_fee';
                $payment->item_id           = $item->id;
                if($item->receiver_id){
                    $payment->for_id            = $item->receiver_id;
                    $payment->payment_with      = $item->receiver_id;
                }
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.$item->return_courier_fee;
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }

            $payment                    = new \Spot\Shipment\Models\Payment;
            $payment->type              = 1;
            $payment->item_id           = $item->id;
            if($item->receiver_id){
                $payment->for_id            = $item->receiver_id;
                $payment->payment_with      = $item->receiver_id;
            }
            $payment->movement          = 3; //Deduction from the wallet
            $payment->amount            = '-'.$item->courier_fee;
            $payment->payment_type      = 'courier_fee';
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();

        }elseif($item->payment_type  ==  1){
            $total                      = $item->courier_fee+$item->customs_value;
            $total                      = $total+($item->tax*$item->courier_fee/100);
            $total                      = $total+($item->insurance*$item->courier_fee/100);
            if($item->return_package_fee == 1){
                $total                  += $item->return_courier_fee;
            }
            if($item->return_defray == 1){
                $total                  += $item->package_fee;
            }

            if($item->customs_value != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'customs';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.$item->customs_value;
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->tax != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'tax';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.($item->tax*$item->courier_fee/100);
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->insurance != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'insurance';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.($item->insurance*$item->courier_fee/100);
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->return_defray && $item->return_package_fee == 1){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'package_fee';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.$item->package_fee;
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'return_package_fee';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.$item->return_courier_fee;
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }

            $payment                    = new \Spot\Shipment\Models\Payment;
            $payment->type              = 1;
            $payment->item_id           = $item->id;
            $payment->for_id            = $item->sender_id;
            $payment->payment_with      = $item->sender_id;
            $payment->movement          = 3; //Deduction from the wallet
            $payment->amount            = '-'.$item->courier_fee;
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();
        }

    */

    \Flash::success($this['theme_lang']['created_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onDraft()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'c')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();

    if(Auth::getUser()->role_id == 5){
        $number = '';
        for($x = 0; $x <= $this['settings']['tracking']['numbers_order']; $x++){
            $number .= '0';
        }
        $number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
        $number = substr($number, -$this['settings']['tracking']['numbers_order']);

        $data['number']                 =   $number;

        $data['sender_id']              =   Auth::getUser()->id;

        if($data['type']   ==   1) {
            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
            if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '') {
                $delivery_cost  +=   $this['settings']['fees']['delivery_cost'];
            }
        }else{
            $delivery_cost  =   $this['settings']['fees']['delivery_cost'];
        }
        $return_courier_fee     =   null;

        if(isset($data['return_defray']) && $data['return_defray'] != ''){
            if($data['return_package_fee']  ==  1){
                $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
            }else{
                $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
            }
        }

        if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '') {
            $sender_address_id      =   \Spot\Shipment\Models\Address::find($data['sender_address_id']);
            $receiver_address_id    =   \Spot\Shipment\Models\Address::find($data['receiver_address_id']);

            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
            if(!$fees){
                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                    if(!$fees){
                        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                    }
                }
            }

            if($fees){
                if($data['type']   ==   1) {
                    $delivery_cost  =   $fees->pickup_cost;
                    $delivery_cost  +=   $fees->delivery_cost;
                }else{
                    $delivery_cost  =   $fees->delivery_cost;
                }
                if($fees->packaging == 1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
                    foreach($fees->packaging_fees as $package_fee   =>  $value){
                        if($package_fee ==  $data['packaging_id']){
                            $delivery_cost  +=   $value;
                        }
                    }
                }
                if(isset($data['return_defray']) && $data['return_defray'] != ''){
                    if($data['return_package_fee']  ==  1){
                        $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                    }else{
                        $return_courier_fee  =   $fees->delivery_cost_back_sender;
                    }
                }
            }

        }

        $data['return_courier_fee']     =   $return_courier_fee;
        $data['courier_fee']            =   $delivery_cost;
        $data['tax']                    =   $this['settings']['taxes']['percent'];
        $data['insurance']              =   $this['settings']['taxes']['insurance'];
        $data['customs_value']          =   0;
        $data['status_id']              =   $this['settings']['tracking']['default_status'];
        $data['delivery_time_id']       =   $this['settings']['tracking']['default_deliverytime'];
    }

    $prev   =   \Spot\Shipment\Models\Order::where('number', $data['number'])->first();
    if($prev){
        throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
    }

    $item                   = new \Spot\Shipment\Models\Order;
    $item->sender_id        = htmlspecialchars($data['sender_id']);
    $item->sender_address_id= htmlspecialchars($data['sender_address_id']);
    $item->type             = htmlspecialchars($data['type']);
    $item->packaging_id     = htmlspecialchars($data['packaging_id']);
    $item->office_id        = htmlspecialchars($data['office_id']);
    $item->ship_date        = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));

    if($data['type']    ==  2 or $data['show_receiver_info'] == 1){
        $item->receiver_id      = htmlspecialchars($data['receiver_id']);
        $item->receiver_address_id= htmlspecialchars($data['receiver_address_id']);
    }
    $item->payment_type     = htmlspecialchars($data['payment_type']);
    if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
        $item->return_defray    = htmlspecialchars($data['return_defray']);
        $item->package_fee      = htmlspecialchars($data['package_fee']);
        $item->return_package_fee= htmlspecialchars($data['return_package_fee']);
        $item->return_courier_fee= htmlspecialchars($data['return_courier_fee']);
    }
    $item->number           = htmlspecialchars($data['number']);
    $item->tax              = htmlspecialchars($data['tax']);
    $item->insurance        = htmlspecialchars($data['insurance']);
    if(isset($data['mode_id']) && $data['mode_id'] != ''){
        $item->mode_id          = htmlspecialchars($data['mode_id']);
    }
    $item->customs_value    = htmlspecialchars($data['customs_value']);
    if(isset($data['courier_id']) && $data['courier_id'] != ''){
        $item->courier_id       = htmlspecialchars($data['courier_id']);
    }
    $item->courier_fee      = htmlspecialchars($data['courier_fee']);
    $item->delivery_time_id = htmlspecialchars($data['delivery_time_id']);
    $item->status_id        = htmlspecialchars($data['status_id']);
    if(isset($data['assigned_id']) && $data['assigned_id'] != ''){
        $item->assigned_id  = htmlspecialchars($data['assigned_id']);
    }
    $item->currency_id      = \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first()->id;
    $item->channel          = 'backend';
    $item->created_at       = \Carbon\Carbon::now();
    $item->updated_at       = \Carbon\Carbon::now();
    $item->barcode          = htmlspecialchars($data['number']);
    $item->requested        = 100;
    $item->save();

    if(isset($data['sender']) && Auth::getUser()->role_id == 5){
        \RainLab\User\Models\User::where('id', Auth::getUser()->id)->update(['mobile' => $data['sender_mobile']]);
    }

    $shipdate               = \Carbon\Carbon::parse($item->ship_date);
    $deliverydate           = $shipdate->addHours($item->deliverytime->count);
    $item->delivery_date    = $deliverydate;
    $item->update();

    if(isset($data['items']) && $data['items'] != '' && !empty($data['items'])){
        foreach($data['items'] as $shipping_item){
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


    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'saved';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['saved_successfully']);
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

        foreach($items as $item){
            $array[] = array("id"=>$item->id, "text"=>$item->name, "mobile"=>$item->mobile);
        }
    }
    $array[] = array("id"=>'new', "text"=>'<i class="flaticon2-add"></i>&nbsp;'.$this['theme_lang']['add_new']);
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
    $subitem->country            = htmlspecialchars($data['country_id']);
    $subitem->default           = 1;
    $subitem->created_at        = \Carbon\Carbon::now();
    $subitem->updated_at        = \Carbon\Carbon::now();
    $subitem->save();

    if(isset($data['connect'])){
        $event_data =   array(
            'persons'   =>  [$item->id],
            'sender'    =>  Auth::getUser(),
            'item'      =>  $item,
            'type'      =>  'new_account',
            'thumb'     =>  'icon',
            'icon'      =>  'flaticon-gift',
            'subject'   =>  $this['theme_lang']['new_account'],
            'message'   =>  $this['theme_lang']['new_account'],
            'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
            'badge'     =>  'success',
        );
        \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);
    }
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
    $subitem->country           = htmlspecialchars($data['country_id']);
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
    $html .= '<option value="new" data-icon="flaticon2-add">'.$this['theme_lang']['add_new'].'</option>';
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
public function onChangefees(){
    $data = post();

    if($data['type']   ==   1) {
        if($data['show_receiver_info'] == 1){
            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
            $delivery_cost  +=   $this['settings']['fees']['delivery_cost'];
        }else{
            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
        }
    }else{
        $delivery_cost  =   $this['settings']['fees']['delivery_cost'];
    }
    if($data['return_package_fee']  ==  1){
        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
    }else{
        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
    }

    if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '' && isset($data['sender_address_id']) && $data['sender_address_id']   !=   '') {
        $sender_address_id      =   \Spot\Shipment\Models\Address::find($data['sender_address_id']);
        $receiver_address_id    =   \Spot\Shipment\Models\Address::find($data['receiver_address_id']);

        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
        if(!$fees){
            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
            if(!$fees){
                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                }
            }
        }

        if($fees){
            if($data['type']   ==   1) {
                $delivery_cost  =   $fees->pickup_cost;
            }else{
                $delivery_cost  =   $fees->delivery_cost;
            }
            if($fees->packaging == 1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
                foreach($fees->packaging_fees as $package_fee   =>  $value){
                    if($package_fee ==  $data['packaging_id']){
                        $delivery_cost  +=   $value;
                    }
                }
            }
            if(isset($data['return_defray']) && $data['return_defray'] != ''){
                if($data['return_package_fee']  ==  1){
                    $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                }else{
                    $return_courier_fee  =   $fees->delivery_cost_back_sender;
                }
            }
        }

    }

    return array("delivery_cost" => $delivery_cost,"return_courier_fee" => $return_courier_fee);
}
}
