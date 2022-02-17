<html>
    <?php
    // echo "hello Php begginers!"
    // $movie = array(0=>"Doctor strange",
    //             1=>"fast",
    //             2=>"furious",
    //             3=>"fast and furious",
    //             4=>"avengers");
    // echo $movie[3];
    $person = array("mary" => "female","john" =>"male","mirrim"=>"female");
    // print_r($person);
    // echo "";
    // echo "mary is a " .  $person["mary"];
    /* $film = array(
        "comedy" => array(
            0 => "pink panther",
            1 => "john english",
            2 => "see no evil hear"
        ),
        "action"=>array(
            0=>"bajigar",
            1=>"berojgar",
            2=>"dangerous khiladi"
        ),
        "romance"=>array(
            0=>"romeo and juliet"
        )
    );
    echo $film["romance"][0];
    */
    // switch case
    /*
    $getday="Monday";
    switch($getday){
        case "sunday":
            echo "pray for us";
        break;
        case "monday":
            echo "take her out for dinner";
        break;
        case "saturday":
            echo "take care";
        break;
        default:
        echo "have a nice day";
        break;
    }
    */
    // loops
    // for($i=0;$i<10;$i++){
    //     $prod=10*$i;
    //     echo "10 * $i is $prod <br>";
    // }
    // foreach($person as $key =>$value){
    //     echo "$key is $value". "<br>";
    // }
    // $i=9;
    // do{
    //     echo "$i is ". " <br>";
    // }
    // while($i<9);

    // $baby_name = "Shalon";
    // echo <<<EOT
    // When $baby_name was a baby,
    // She used to look like a "boy".
    // EOT;
    /* functions */
    // function add(){
    //     return 1 + 2;
    // }

    // $a=add();
    // echo $a;
    // function name($name){
    //     echo "my name is:".$name;
    // }
    // name("Dhruv Suthar")
    
    // function kilometers_to_miles($kilometers)
    // {
    // $miles_scale = 0.62;
    // return $kilometers * $miles_scale;
    // }
    // echo kilometers_to_miles(100);
    // function summarks($marks){
    //     $sum = 0;
    //     foreach($marks as $value){
    //         $sum +=$value;
    //     }
    //     return $sum;
    // }
    // $dhruv = [90,89,87,86,85];
    // $summarks=summarks($dhruv);
    // echo "Sum marks:" . $summarks ." Out of 500";

// session_start(); //start the PHP_session function 

// if(isset($_SESSION['page_count']))
// {
//      $_SESSION['page_count'] += 1;
// }
// else
// {
//      $_SESSION['page_count'] = 1;
// }
//  echo 'You are visitor number ' . $_SESSION['page_count'];

     setcookie("user_name", "Guru99", time()+ 10,'/'); // expires after 60 seconds
     echo 'the cookie has been set for 10 seconds';
     
?>
</html>
