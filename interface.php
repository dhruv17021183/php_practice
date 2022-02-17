<?php
interface animal{
    public function makesound();
}
class cat implements animal{
    public function makesound(){
        echo "Meow";
    }
}
class dog implements animal{
    public function makesound(){
        echo "bark";
    }
}
$cat=new cat();
$dog=new dog();
$animals=array($cat,$dog);

// tell the animal to make sound
foreach($animals as $animal){
    $animal->makesound();
    echo "<br>";
}
?>