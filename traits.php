<?php 
trait message1{
    public function msg1(){
        echo "OOP is fun";
    }
}
trait message2{
    public function msg2(){
        echo "OOP reduces code duplication!";
    }
}
class welcome{
    use message1;
}
class welcomeback{
    use message1,message2;
}
$obj=new welcome();
$obj2=new welcomeback();

$obj->msg1();
echo "<br>";
$obj2->msg1();
$obj2->msg2();
?>