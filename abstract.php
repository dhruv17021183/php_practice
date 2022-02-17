


<?php
abstract class car{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    abstract public function intro() : string;
}
// child classes
class audi extends car{
    public function intro() : string{
        return "Choose german quality! $this->name!";
    }
}
class citroen extends car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
}
class volvo extends car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
}
$audi=new audi("Audi");
echo $audi->intro();
echo "<br>";

$citroen=new citroen("citroen");
echo $citroen->intro();
echo "<br>";

$volvo=new volvo("volvo");
echo $volvo->intro();
// echo "<br>";
?>