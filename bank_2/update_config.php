<?php
include_once("config.php");
include_once("encrypt.php");
session_start();
$_SESSION['inform'] = " ";
if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $_SESSION['id'] = $id;
    $query = "SELECT id FROM system_info";
    $sql   = mysqli_query($conn,$query);
    if (mysqli_num_rows($sql) == 0){
        $query = "UPDATE system_info SET id='$id'";
        $sql   = mysqli_query($conn,$query);
        $_SESSION['inform'] = "System Id Is Inserted Successfully ";
    }else {
        header("Location:update2.php?choose_chice");
    }
}

if (isset($_POST['yes'])){
    $id = $_SESSION['id'];
    $query = "UPDATE system_info SET id='$id'";
    $sql   = mysqli_query($conn,$query);
    $_SESSION['inform'] = "System Id Is Updated Successfully ";
    header("Location: update.php?success");
}elseif(isset($_POST['no'])){
    header("Location: update.php?canceld");
}

?>