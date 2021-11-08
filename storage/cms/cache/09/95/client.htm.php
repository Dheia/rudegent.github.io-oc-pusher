<?php 
class Cms5de18dda69c7a874382414_9bfa2394501a91cb1808bcb06b38b06aClass extends Cms\Classes\PageCode
{
public function onStart(){

    $this['item']           =   \RainLab\User\Models\User::find($this->param('id'));

}
}
