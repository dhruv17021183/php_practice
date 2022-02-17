<?php
class fruit{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    public function intro(){
        echo "the fruit is {$this->name} and color 
        {$this->color}.";
    }
}
class strawberry extends fruit{
    public $weight;
    public function __construct($name,$color,$weight){
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
    }
    public function intro() {
        echo "The fruit is {$this->name}, 
        the color is {$this->color}, 
        and the weight is {$this->weight} gram.";
      }
    // public function message(){
    //     echo "fruit or berry?";
    // }
}
$stra=new strawberry("berry","red",50);
// $stra->message();
$stra->intro();
// echo "hii";
?>