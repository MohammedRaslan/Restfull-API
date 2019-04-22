<?php
    $conn = mysqli_connect("localhost","root","","service_broker");
    if (mysqli_connect_errno()){
        die("Faild To Connect To MySQL: ". mysqli_connect_errno());
    }
?>