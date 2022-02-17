<?php
// class fruit{
//     public $name;
//     public $color;
    
//     //methos
//     function set_name($name){
//         $this->name=$name;
//     }
//     function get_name(){
//         return $this->name;
//     }
//     function set_color(){
//         $this->color=$color;
//     }
//     function get_color(){
//         return $this->color;
//     }
// }
// $apple = new fruit();
// // $banana = new fruit();

// $apple->set_name('apple');
// $apple->set_color('red');

// echo $apple->get_name();
// echo "<br>";
// // echo $banana->get_name();
// // echo "<br>";
// echo "color: ".$apple->get_color();
class fruit{
    public $name;
}
$apple=new fruit();
$apple->name="apple";

echo $apple->name;
var_dump($apple instanceof fruit);
?>