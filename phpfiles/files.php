<?php
// using file_exist function we can check if any file is exist or not
// file_exists($filename);
/*
if (file_exists('dhruv.txt'))
 {    
        echo 'file found!';
 } 
else
 {     
        echo 'my_settings.txt does not exist';
  } 
  */
  // fopen
  // syntax
// fopen($file_name,$mode,$use_include_path,$context);
// $file = fopen('dhruv.txt','r');
// while(! feof($file)) {
//     $line = fgets($file);
//     echo $line. "<br>";
//   } 
// fclose($file);
// $fptr = fopen("dhruv.txt","r");
// // echo $fptr;
// if(!$fptr){
//   die("not a valid filename");
// }
// // else{
// //   echo"hii";
// // }
// $content = fread($fptr,filesize("dhruv.txt"));
// echo $content;
// fclose("dhruv.txt"); 
// fgets
// $fh=fopen("dhruv.txt",'r') or die("does not exit");
// $line=fgets($fh);
// echo $line;
// fclose($fh);
//copy
// copy('dhruv.txt','dhruv2.txt')or die("no");
// echo "file copied to 'dhruv2.txt'";
// delete file
// if(!unlink('dhruvv.txt')){
//   echo "could not delete file";
  
// }
// else{
//   echo "file 'dhruv.txt' successfully deleted";
// }
// $file=fopen("dhruv.txt","w");
// echo fwrite($file,"hello bro");
// // echo $frit;
// fclose($file);
$file=fopen('dhruv2.txt','a');
// rewind($file);
fwrite($file,'hello world');
fwrite($file,'appending data');

// fflush($file);

fclose($file);
echo "file appended success"
?>
