<?php
// echo "Today";
// $d=date("dS F Y g:i A");
// echo $d;
// set the default timezone to use.
// date_default_timezone_set('UTC');
// echo date("l");
// echo date("l jS \of F Y h:i:s A");
/* for minutes "i"
   for hours "h"
   for seconds "s"
   */
/* mktime */
// $tommorrow=date("l",mktime(0,0,0,date("m"),date("d")+1,date("Y")));
// echo $tommorrow;
// // echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
// $lastmonth=date("F",mktime(0, 0, 0, date("m")-1, date("d"),   date("Y")));
// echo "last month is ".$lastmonth;
// $nextyear=date("Y",mktime(0, 0, 0, date("m"),date("d"),date("Y")+1));
// echo "Next Year is".$nextyear;
// $today=date("j,n,Y");
// $today=date('h-i-s, j-m-y, it is w Day'); 
// echo date("o");
// $date=date_create("2013-03-15");
// date_add($date,
// date_interval_create_from_date_string("14 Days"));
// echo date_format($date,"Y-m-d");
// echo "<pre>";
// print_r(getdate());
// echo "<pre>";
// echo "<br>";
// echo getdate();
// echo "<pre>";
// print_r(gettimeofday());
// echo "<pre>";
// echo gettimeofday(true);
$format="%d/%m/%Y %H:%M:%S";
$strf=strftime($format);
echo("$strf");
echo "<pre>";
print_r(strptime($strf,$format));
echo "<pre>";
?>
