<?php 
class Cms5e18cc4ddac82234796847_018a0114c9d6e1f515fd43cad49e403aClass extends Cms\Classes\PageCode
{
public function onStart() {
    if(!Auth::getUser()->hasUserPermission(["employees"],'u')) {
        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::to('dashboard/settings/'.$this->page->child_of_page);
    }
    $this['item']           =   \RainLab\User\Models\User::find($this->param('id'));
    $this['permissions']    =   \Spot\UserPermissions\Models\Permission::get();
    $this['countries']      =   \RainLab\Location\Models\Country::where('is_enabled', 1)->get();
    $this['groups']         =   \RainLab\User\Models\UserGroup::get();
    $this['roles']          =   \Vdomah\Roles\Models\Role::where('id', '!=', 5)->get();
    $this['offices']        =   \Spot\Shipment\Models\Office::get();


    $this['getStates'] = new class {
        public function data($selected,$country_id,$select = null)
        {
            $states         =   \RainLab\Location\Models\State::where('country_id', $country_id)->get();
            foreach($states as $state){
                $select .= '<option value="'.$state->id.'" '.(($selected == $state->id) ? 'selected' : '').'>'.$state->name.'</option>';
            }
            echo $select;
        }
    };
    $this['getCities'] = new class {
        public function data($selected,$state_id,$select = null)
        {
            $states         =   \Spot\Shipment\Models\City::where('state_id', $state_id)->get();
            foreach($states as $state){
                $select .= '<option value="'.$state->id.'" '.(($selected == $state->id) ? 'selected' : '').'>'.$state->name.'</option>';
            }
            echo $select;
        }
    };
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
public function onSave()
{
    if(!Auth::getUser()->hasUserPermission(["employees"],'u')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();
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
    $item->is_superuser     = (isset($data['is_superuser'])? $data['is_superuser'] : 0);
    $item->driver           = (isset($data['driver'])? $data['driver'] : 0);
    $item->mobile           = htmlspecialchars($data['mobile']);
    $item->phone            = htmlspecialchars($data['phone']);
    $item->street_addr      = htmlspecialchars($data['street_addr']);
    if(isset($data['city']) && $data['city'] != ''){
        $item->city_id          = htmlspecialchars($data['city']);
    }
    $item->zip              = htmlspecialchars($data['zip']);
    if(isset($data['state_id']) && $data['state_id'] != ''){
        $item->state_id         = htmlspecialchars($data['state_id']);
    }
    if(isset($data['country_id']) && $data['country_id'] != ''){
        $item->country_id       = htmlspecialchars($data['country_id']);
    }
    if(isset($data['office_id']) && $data['office_id'] != ''){
        $item->office       = htmlspecialchars($data['office_id']);
    }else{
        $item->office       = null;
    }
    $item->role_id          = htmlspecialchars($data['role_id']);
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    if(isset($data['password']) && $data['password'] != null && !empty($data['password']) && $data['password'] != ''){
        if(isset($data['password_confirmation']) && $data['password_confirmation'] != null && !empty($data['password_confirmation']) && $data['password_confirmation'] != '' && $data['password_confirmation'] == $data['password']){
            \RainLab\User\Models\User::where('id', $item->id)->update(['password' => \Hash::make($data['password']) ]);
        }
    }


    \Db::table('users_groups')
    ->where('user_id', $item->id)->delete();

    if(isset($data['groups'])){
        foreach($data['groups'] as $group_id){
            $item->groups()->save(\RainLab\User\Models\UserGroup::where('id', $group_id)->first());
        }
    }

    \Db::table('spot_userpermissions_user_permission')
    ->where('user_id', $item->id)->update(['permission_state' => null, 'updated_at' => \Carbon\Carbon::now()]);

    $permissions = [];
    if(isset($data['permissions'])){
        foreach($data['permissions'] as $permission => $val){
            if(in_array('c', $val) || in_array('u', $val) || in_array('d', $val))
            {
                if(!in_array('r', $val)){
                    array_push($val,"r");
                }
            }
            $value = '';
            if(in_array('c', $val)){
                $value .= 'c';
            }
            if(in_array('r', $val)){
                $value .= 'r';
            }
            if(in_array('u', $val)){
                $value .= 'u';
            }
            if(in_array('d', $val)){
                $value .= 'd';
            }
            $permissions[$permission] = $value;
        }
        foreach($permissions as $permission => $val){
            \Db::table('spot_userpermissions_user_permission')
            ->where('user_id', $item->id)
            ->where('permission_id', $permission)
            ->update(['permission_state' => $val, 'updated_at' => \Carbon\Carbon::now()]);
        }
    }

    \System\Helpers\Cache::clear();
    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/settings/'.$this->page->child_of_page);
}
}
