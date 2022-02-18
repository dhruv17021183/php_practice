<?php
$nextweek = time() + (7*24*60*60);
// echo $nextweek;
echo 'Now:  '.date('Y-m-d')."\n";
echo "<br>";
echo 'Next week:'.date('Y-m-d',$nextweek)."\n";
?>