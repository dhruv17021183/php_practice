<?php
//A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):

// class greeting{
//     public static function welcome(){
//         echo "Hii";
//     }
//     public function __construct(){
//         self::welcome();
//     }
// }
// new greeting();
//To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.
class domain{
    protected static function getwn(){
        return "Youtube.com";
    }
}
class domainw3 extends domain{
    public $websitename;
    public function __construct(){
        $this->websitename=parent::getwn();
    }
}
$domainw3=new domainw3;
echo $domainw3->websitename;
?>