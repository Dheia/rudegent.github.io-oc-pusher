<?php 
class Cms5e18cc4577ced903648182_865f31a188df696946727044970832afClass extends Cms\Classes\PageCode
{
public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["employees"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
    }

    $this->page->listing        = true;

    if(Auth::getUser()->hasUserPermission(["employees"],'c')    &&  Auth::getUser()->hasUserPermission(["departments"],'c')){
        $this->page->actions = array(
            'buttons'   =>  array(
                array(
                    'id'    =>  'addNew',
                    'title' =>  $this['theme_lang']['add_new'],
                    'icon'  =>  'flaticon2-add',
                    'type'  =>  'success',
                    'url'   =>  url('dashboard/settings/employees/create'),
                ),
                array(
                    'id'    =>  'manageDepartments',
                    'title' =>  $this['theme_lang']['manage_departmeents'],
                    'icon'  =>  'flaticon-app',
                    'type'  =>  'info',
                    'url'   =>  url('dashboard/settings/departments'),
                ),
            ),
        );
    }elseif(Auth::getUser()->hasUserPermission(["employees"],'c')){
        $this->page->actions = array(
            'buttons'   =>  array(
                array(
                    'id'    =>  'addNew',
                    'title' =>  $this['theme_lang']['add_new'],
                    'icon'  =>  'flaticon2-add',
                    'type'  =>  'success',
                    'url'   =>  url('dashboard/employees/create'),
                ),
            ),
        );

    }

}
public function onDelete()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["employees"],'d')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }

    if(null !== post('id')){
        if(is_array(post('id'))){
            \RainLab\User\Models\User::whereIn('id',post('id'))->delete();
        }else{
            \RainLab\User\Models\User::find($data['id'])->delete();
        }
        return Redirect::back();
    }
}
}
