$email = $_REQUEST['ENTER EMAIL'];
$name= $_REQUEST['YOUR NAME'];
$company= $_REQUEST['ENTER COMPANYNAME'];
if (empty($email) || empty($name) || empty($company))
{
    echo "Please fill all the fields";
}
else
{
    mail("sharmasubham529@gmail.com", "Details About Comapny", $name , $mail, $comapny "From: $name <$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully')
    window.history.go(-2);
    </script>";

}
//redirect
//
?>