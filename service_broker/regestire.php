<?php
include_once("config.php");
session_start();

if (isset($_POST['submit'])){
    $usename  = $_POST['name'];
    $password = $_POST['password'];
    $sys_name = $_POST['system_name'];
    $sys_name = strtolower($sys_name);
    $contact  = $_POST['contact'];
    $address  = $_POST['address'];

    $query = "INSERT INTO system_info (system_name,admin_name,admin_pass,contact,address)
              VALUES ('$sys_name','$usename','$password','$contact','$address')"; 
    $sql = mysqli_query($conn,$query);
    if ($sql){
        $id = rand();
        $_SESSION['id'] = $id;
        $query2 = "UPDATE system_info SET id ='$id'";
        $sql2 = mysqli_query($conn,$query2);
        header("Location:confirm.php");
    }else {
        echo "Faild";
    }
}

if (isset($_POST['back'])){
    header("Location:service_broker.php");
}


?>