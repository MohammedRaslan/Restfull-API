<?php
include_once("config.php");
include_once("encrypt.php");
if (isset($_GET['sys'])){
    $system_name = $_GET['sys'];
    $s =' ';
    $info =[];
    $info = $_GET['info'];
    $info = json_decode($info,true);
    $account = bug($info[0]);
    $name    = bug($info[1]);
    $name =  ltrim($name,' ');
    $account = ltrim($account,' ');
    var_dump($name);
    var_dump($account);
    $query  = "SELECT * FROM users WHERE account_number ='$account' AND name='$name'";
    $sql    = mysqli_query($conn,$query);
   if (mysqli_num_rows($sql) == 0){
        // echo $system_name;
        if($system_name =="cib"){
            header("Location:http://localhost/service_broker/check.php?sys=".$system_name."&nodata=There Is No Result");
    }elseif($system_name =="hspc"){
        header("Location:http://localhost/service_broker/check.php?sys=".$system_name."&nodata=There Is No Result");
    }
  }else{
      $temarr = [];
      while ($row = mysqli_fetch_array($sql)){
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $address = $row['address'];
          $account_number = $row['account_number'];
          $phone = $row['phone_number'];
          $balance = $row['balance'];
      }
      $temarr [] = $id;
      $temarr [] = $name;
      $temarr [] = $email;
      $temarr [] = $address;
      $temarr [] = $account_number;
      $temarr [] = $phone;
      $temarr [] = $balance;
      $result = json_encode($temarr);
      header("Location: http://localhost/service_broker/check.php?sys=".$system_name."&result=".$result);
  }
}


?>