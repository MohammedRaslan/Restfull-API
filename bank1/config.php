<?php
    $conn = mysqli_connect("localhost","root","","bank_1");
    if (mysqli_connect_errno()){
        die("Faild To Connect To MySQL: ". mysqli_connect_errno());
    }
?>