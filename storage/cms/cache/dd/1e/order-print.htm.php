<?php 
class Cms5e18cc1ce9114731545176_d3b3083872e10f6fca1e57ef11e199fbClass extends Cms\Classes\PageCode
{
public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["order"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
    }

    $this['order']  =   $order  =   \Spot\Shipment\Models\Order::find($this->param('id'));

    $progress           = 0;
    $progress_status    = 'warning';
    $shipdate           = \Carbon\Carbon::parse($order->ship_date);
    $deliverydate       = $shipdate->addHours($order->deliverytime->count);
    $today              = \Carbon\Carbon::now();

    $time_diff          = $today->diffInDays($deliverydate, false);

    switch($order->requested){
        case 0:
            $progress           = 0;
            break;
        case 1:
            $progress           = 30;
            break;
        case 2:
            $progress           = 100;
            break;
        case 3:
            $progress           = 60;
            break;
        case 4:
            $progress           = 100;
            break;
        default:
            $progress           = 100;
    }

    if($progress == 100){
        $progress_status    = 'success';
    }else{
        if($time_diff < 0){
            if($order->requested < 4){
                $progress_status    = 'danger';
            }
        }
    }

    $this['progress']               =   $progress;
    $this['progress_status']        =   $progress_status;

    //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned
}
}
