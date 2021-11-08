<?php 
class Cms5de18e229c737514549994_6cfd833a68ffdffe5a9314553ffdd300Class extends Cms\Classes\PageCode
{
public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["report"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
    }

    $this['user']       =   Auth::getUser();


    if($this->param('category') == 'shipments'){

        $created_at         =   \Session::get('created_at');
        $sender_id          =   \Session::get('sender_id');
        $employee_id        =   \Session::get('employee_id');

        $records            =   \Spot\Shipment\Models\Order::orderBy('id', 'DESC');
        if($this->param('type') == 'delayed'){
            $records            =   $records->whereIn('requested',[0,1,3])->where('delivery_date', '<', \Carbon\Carbon::now()->format('Y-m-d'));
        }
        if($this->param('type') == 'delivered'){
            $records            =   $records->whereIn('requested',[4])->where('delivery_date', '<', \Carbon\Carbon::now()->format('Y-m-d'));
        }

        if(isset($created_at) && $created_at != ''){
            $this['created_at'] =   $created_at;
            $created_at     =   explode(" - ", $created_at);
            $start          =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $created_at[0]));
            if(!isset($created_at[1])){
                $start          =   $start->copy()->startOfDay();
                $end            =   $start->copy()->endOfDay();
            }else{
                $end            =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $created_at[1]));
                $start          =   $start->copy()->startOfDay();
                $end            =   $end->copy()->endOfDay();
            }

            $records        =   $records->where('created_at', '>=', $start);
            $records        =   $records->where('created_at', '<=', $end);
        }
        if(isset($employee_id) && $employee_id != ''){
            $this['employee_id'] =   $employee_id;
            $this['employee'] =   RainLab\User\Models\User::find($employee_id);
            $records    =   $records->where(function($q) use($employee_id){
                $q->where('assigned_id', $employee_id)
                ->orWhere(function($q) use($employee_id){
                    $q->whereHas('manifest',function($q) use($employee_id){
                        $q->where('driver_id', $employee_id)
                        ->orWhere('employee_id', $employee_id);
                    });
                });
            });
        }
        if(isset($sender_id) && $sender_id != ''){
            $this['sender_id'] =   $sender_id;
            $this['sender'] =   RainLab\User\Models\User::find($sender_id);
            $records    =   $records->where('sender_id', $sender_id);
        }
    }elseif($this->param('category') == 'transactions'){


        $created_at         =   \Session::get('created_at');
        $for_id             =   \Session::get('for_id');
        $status_id          =   \Session::get('status_id');

        $records            =   \Spot\Shipment\Models\Payment::orderBy('id', 'DESC');
        if($this->param('type') == 'deposited'){
            $records    =   $records->whereIn('movement',[2,4,6,8]);
        }
        if($this->param('type') == 'withdrwal'){
            $records    =   $records->whereIn('movement',[1,3,5,7]);
        }


        if(isset($created_at) && $created_at != ''){
            $this['created_at'] =   $created_at;
            $created_at     =   explode(" - ", $created_at);
            $start          =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $created_at[0]));
            if(!isset($created_at[1])){
                $start          =   $start->copy()->startOfDay();
                $end            =   $start->copy()->endOfDay();
            }else{
                $end            =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $created_at[1]));
                $start          =   $start->copy()->startOfDay();
                $end            =   $end->copy()->endOfDay();
            }

            $records        =   $records->where('created_at', '>=', $start);
            $records        =   $records->where('created_at', '<=', $end);
        }
        if(isset($for_id) && $for_id != ''){
            $this['for_id'] =   $for_id;
            $this['for']    =   RainLab\User\Models\User::find($for_id);
            $records        =   $records->where('for_id', $for_id);
        }
        if(isset($status_id) && $status_id != ''){
            $this['status_id'] =   $status_id;
            $records        =   $records->where('status', $status_id);
        }
    }
    $this['orders']     =   $records->get();

    Session::forget('created_at');
    Session::forget('sender_id');
    Session::forget('employee_id');
    Session::forget('for_id');
    Session::forget('status_id');

}
}
