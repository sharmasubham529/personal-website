<?php
//get data from form  

$name = $_POST['Name'];
$email= $_POST['Email'];
$content= $_POST['Subject'];
$number= $_POST['mobile'];
$message= $_POST['Message'];
$to = "sharmasubham529@gmail.com";
$subject = "Mail From Subham";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $content . "\r\n Mobile Number =" . $number . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thankyou.html");
}
//redirect
//
?>
<?php
//get data from form  

$name = $_REQUEST['Name'];
$mobile= $_REQUEST['mobile'];
$email= $_REQUEST['Email'];
$subject= $_REQUEST['Subject'];
$message= $_REQUEST['Message'];
if (empty($name) || empty($mobile) || empty($email) || empty($subject) || empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("sharmasubham529@gmail.com", "Webtech Message", $message , "From: $name <$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully')
    window.history.go(-1);
    </script>";
}
//redirect
//
?>