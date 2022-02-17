<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Email:<input name="email" type="text" /><br /><br />
        Subject:<input name="subject" type="text" /><br /><br />
        Message:<br />
        <textarea name="message" rows="15" cols="40"></textarea><br /><br />
        <input name="esubmit" type="submit" />
        </form>
</body>

<?php
if(isset($_POST['esubmit'])){
    $to="dhruvs1702@gmail.com";
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    // $from="dsuthar1183@gmail.com";
    $from=$_POST['email'];
    $headers="From : $from";
    // $headers=[
    //     "MIME-Version:1.0",
    //     "Content-type:text/plain; charset=utf-8",
    //     "From: dsuthar1183@gmail.com",
    //     "Cc:sunnysuthar17@gmail.com"
    // ];
    // headers format is in arrays and mail functions takes 
    // arguments in  string format so we have tio convert in string
    // $headers=implode("\r\n",$headers);

    if(mail($to,$subject,$message,$headers)){
    echo "Mail sent.";
    }
    else{
        echo "Failed";
    }
}
?>
