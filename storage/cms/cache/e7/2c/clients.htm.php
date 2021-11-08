<?php 
class Cms5de18daba9f6d759702611_69255b277007a4190777984647a3db5cClass extends Cms\Classes\PageCode
{
public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["client"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
    }

    $this->page->listing        = true;

    if(Auth::getUser()->hasUserPermission(["client"],'c')){
        $this->page->actions = array(
            'buttons'   =>  array(
                array(
                    'id'    =>  'addNew',
                    'title' =>  $this['theme_lang']['add_new'],
                    'icon'  =>  'flaticon2-add',
                    'type'  =>  'success',
                    'url'   =>  url('dashboard/clients/create'),
                ),
            ),
        );
    }
}
public function onDelete()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["client"],'d')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }

    if(null !== post('id')){
        if(is_array(post('id'))){
            foreach(post('id') as $id){
                if($id != ''){
                    $item = \RainLab\User\Models\User::find($id);
                    if(!empty($item->orders)){
                        $item->orders->each->delete();
                    }
                    if(!empty($item->payments)){
                        $item->payments->each->delete();
                    }
                    if(!empty($item->tasks)){
                        $item->tasks->each->delete();
                    }
                    if(!empty($item->activities)){
                        $item->activities->each->delete();
                    }
                    if(!empty($item->addresses)){
                        $item->addresses->each->delete();
                    }
                    $item->delete();
                }
            }
        }else{
            $item = \RainLab\User\Models\User::find($data['id']);
            if(!empty($item->orders)){
                $item->orders->each->delete();
            }
            if(!empty($item->payments)){
                $item->payments->each->delete();
            }
            if(!empty($item->tasks)){
                $item->tasks->each->delete();
            }
            if(!empty($item->activities)){
                $item->activities->each->delete();
            }
            if(!empty($item->addresses)){
                $item->addresses->each->delete();
            }
            $item->delete();
        }
        return Redirect::back();
    }
}
}
