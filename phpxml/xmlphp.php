<?php
$xml=simplexml_load_file('xml1.xml') or die("Error:cannot create object");
echo "<pre>";
print_r($xml);
echo "</pre>";
// echo '<h2>Employee Listing</h2>';

// $list=$xml->record;
// for($i=0;$i<count($list);$i++){
//     echo '<b>Man no:<b>'.$list[$i]->attributes()->man_no.'<br>';
//     echo 'Name: ' . $list[$i]->name . '<br>';

//     echo 'Position: ' . $list[$i]->position . '<br><br>';    
// }
// echo $xml->book[0]['category']."<br>";
// echo $xml->book[1]->title['lang'];
// foreach($xml->children() as $books){
//     echo $books->title.", ";
//     echo $books->author.", ";
//     echo $books->year.", ";
//     echo $books->price."<br>";

// }
// $list=$xml->friend;
// echo $list->child;
// $attr=$xml->bookstore;
// echo $attr;
// echo $xml->tr->td[0];
// echo "<pre>";
// echo $xml->tr->td[1];
// echo "</pre>";
echo $xml->book->title;
?>