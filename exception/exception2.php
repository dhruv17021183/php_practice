<?php
// customexception class inherits all the property of exception class

// class customexception extends Exception{
//     public function errormessage(){
//         $errorm='error on line '.$this->getLine().'in'.$this->getfile()
//         .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
//         return $errorm;
//     }
// }
// $email="someone@example...com";
// try{
//     // check if
//     if(filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE){
//         //throw an exception if not a valid email
//         throw new Exception($email);
//     }
//     // else{
//     //     echo "valid";
//     // }
// }
// catch(customexception $e){
//     echo $e->errorMessage();
// }
// catch(Exception $e){
//     echo $e->errorMessage();
// }
?>