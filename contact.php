<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

//check input fields
if (empty($name) || empty($email) || empty($message))
{
     echo "Please Fill all the fields";
}
else
{
    mail("soodsaab859@gmail.com", "Website message", $message , "from: $name <
    $email>");
    echo "<script type='text/javascript >alert('Your message sent
    successfully To Nsquare Tattoes');
    window.history.log(-1);
    </script>";
    