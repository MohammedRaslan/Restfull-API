<?php
include_once("../config.php");
 session_start();
 $_SESSION['message'] ="";
 if (isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $_SESSION['username'] = $_POST['username'];
        $pass = $_POST['password'];
        $query = "SELECT admin_name,admin_pass FROM system_info WHERE admin_name = '$user' AND admin_pass = '$pass' ";
        $sql = mysqli_query($conn,$query);
        if (mysqli_num_rows($sql) == 0){
            echo "Faild";
            //$_SESSION['message'] = "Username Or Password Is Not Correct !";
        }else{
            header('Location: ../index.php');
        }
    }
?>