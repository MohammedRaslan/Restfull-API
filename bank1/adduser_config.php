<?php
include_once("config.php");
include_once("encrypt.php");
session_start();
$_SESSION['message'] = " ";
if(isset($_POST['submit'])){
    $name = bug(intoAscii($_POST['name']));
    $email = bug(intoAscii($_POST['email']));
    $address = bug(intoAscii($_POST['address']));
    $Acc_num = bug(intoAscii($_POST['a_number']));
    $ph_num = bug(intoAscii($_POST['p_number']));
   $query = "INSERT INTO users(name,email,address,account_number,phone_number) VALUES ('$name','$email','$address','$Acc_num','$ph_num')";
    $sql = mysqli_query($conn,$query);
    if ($sql){
        header("Location: adduser.php");
        $_SESSION['message'] = "User Inserted Successfully";
    }else{
        header("Location: adduser.php");
        $_SESSION['message'] = "Error";
    }
}


?>