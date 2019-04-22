<?php 
include_once("config.php");
include_once("encrypt.php");
if (isset($_POST['submit'])){
    $account = $_POST['account'];
    $name    = $_POST['name'];
    $company = $_POST['company'];
$temarr = [];
$temarr[] =intoAscii($account);
$temarr[] =intoAscii($name);
$temarr[] =intoAscii($company);
$info = [];
$info = json_encode($temarr);
// var_dump($x).'<br>'; 

$query = "SELECT id FROM system_info";
$sql   =mysqli_query($conn,$query);
if (mysqli_num_rows($sql) == 0){
    echo "Faild To Get System ID";
}else {
    while($row = mysqli_fetch_array($sql)){
        $x = $row['id'];
    }
    header("Location: http://localhost/service_broker/check.php?id=".$x."&bs=".$company."&info=".$info);
}

}


?>