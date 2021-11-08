<?php 
class Cms5de18dce57781806775381_e020d88b07e6223715cbcc267650b0a9Class extends Cms\Classes\PageCode
{
public function onStart() {
    if(!Auth::getUser()->hasUserPermission(["client"],'u')) {
        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::to('dashboard/clients');
    }
    $this['item']           =   \RainLab\User\Models\User::find($this->param('id'));
    $this['countries']      =   \RainLab\Location\Models\Country::where('is_enabled', 1)->get();
}
public function onListstates(){
    if(null !== post('id')){
        $items          = RainLab\Location\Models\State::where('country_id', post('id'))->get();
        $html = '<option data-hidden="true"></option>';
        if($items){
            foreach($items as $item){
                $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
            }

        }
        return array('html'=>$html);
    }
}
public function onListcities(){
    if(null !== post('id')){
        $items          = Spot\Shipment\Models\City::where('state_id', post('id'))->get();
        $html = '<option data-hidden="true"></option>';
        if($items){
            foreach($items as $item){
                $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
            }

        }
        return array('html'=>$html);
    }
}
public function onListareas(){
    if(null !== post('id')){
        $items          = Spot\Shipment\Models\Area::where('city_id', post('id'))->get();
        $html = '<option data-hidden="true"></option>';
        if($items){
            foreach($items as $item){
                $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
            }

        }
        return array('html'=>$html);
    }
}
public function onSave()
{
    if(!Auth::getUser()->hasUserPermission(["client"],'u')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();

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

    $item                   = \RainLab\User\Models\User::find($this->param('id'));
    $item->name             = htmlspecialchars($data['name']);
    $item->email            = htmlspecialchars($data['email']);
    $item->username         = htmlspecialchars($data['username']);
    if(isset($data['password']) && $data['password'] != null && !empty($data['password']) && $data['password'] != ''){
        if(isset($data['password_confirmation']) && $data['password_confirmation'] != null && !empty($data['password_confirmation']) && $data['password_confirmation'] != '' && $data['password_confirmation'] == $data['password']){
            $password                       = \Hash::make($data['password']);
            $item->password                 = $password;
            $item->password_confirmation    = $password;
        }
    }
    if(isset($data['mobile']) && $data['mobile'] != ''){
        $item->mobile           = htmlspecialchars($data['mobile']);
    }
    if(isset($data['phone']) && $data['phone'] != ''){
        $item->phone            = htmlspecialchars($data['phone']);
    }
    if(isset($data['gender']) && $data['gender'] != ''){
        $item->gender           = htmlspecialchars($data['gender']);
    }
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    if(isset($data['password']) && $data['password'] != null && !empty($data['password']) && $data['password'] != ''){
        if(isset($data['password_confirmation']) && $data['password_confirmation'] != null && !empty($data['password_confirmation']) && $data['password_confirmation'] != '' && $data['password_confirmation'] == $data['password']){
            \RainLab\User\Models\User::where('id', $item->id)->update(['password' => \Hash::make($data['password']) ]);
        }
    }

    foreach($data['addresses'] as $address){
        if(isset($address['id'])){
            $subitem                    = \Spot\Shipment\Models\Address::find($address['id']);
            $subitem->name              = htmlspecialchars($address['name']);
            $subitem->street            = htmlspecialchars($address['street_address']);
            $subitem->county            = htmlspecialchars($address['county']);
            $subitem->city              = htmlspecialchars($address['city']);
            $subitem->state             = htmlspecialchars($address['state']);
            $subitem->zipcode           = htmlspecialchars($address['postal_code']);
            $subitem->country           = htmlspecialchars($address['country']);
            $subitem->lat               = htmlspecialchars($address['lat']);
            $subitem->lng               = htmlspecialchars($address['lng']);
            $subitem->url               = htmlspecialchars($address['url']);
            $subitem->default           = htmlspecialchars($address['default']);
            $subitem->updated_at        = \Carbon\Carbon::now();
            $subitem->update();
        }else{
            $subitem                    = new \Spot\Shipment\Models\Address;
            $subitem->user_id           = $item->id;
            $subitem->name              = htmlspecialchars($address['name']);
            $subitem->street            = htmlspecialchars($address['street_address']);
            $subitem->county            = htmlspecialchars($address['county']);
            $subitem->city              = htmlspecialchars($address['city']);
            $subitem->state             = htmlspecialchars($address['state']);
            $subitem->zipcode           = htmlspecialchars($address['postal_code']);
            $subitem->country           = htmlspecialchars($address['country']);
            $subitem->lat               = htmlspecialchars($address['lat']);
            $subitem->lng               = htmlspecialchars($address['lng']);
            $subitem->url               = htmlspecialchars($address['url']);
            $subitem->default           = htmlspecialchars($address['default']);
            $subitem->created_at        = \Carbon\Carbon::now();
            $subitem->updated_at        = \Carbon\Carbon::now();
            $subitem->save();
        }
    }

    \Flash::success($this['theme_lang']['created_successfully']);
    return Redirect::to('dashboard/clients');
}
}
