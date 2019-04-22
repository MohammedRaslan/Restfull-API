<?php
include_once("config.php");
include_once("encrypt.php");


$query = "SELECT * FROM users WHERE id=5";
$sql   = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($sql)){
    var_dump($row['name']);
    var_dump($row['account_number']);
}

?>