<?php 
class goodbye{
    const LEAVING_M="Thanks for here coming";
    public function byebye(){
        echo self::LEAVING_M;
    }
}
$goodbye=new goodbye();
$goodbye->byebye();
?>