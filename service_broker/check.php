<?php
include_once("config.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $tocompany = $_GET['bs'];
    $tocompany = strtolower($tocompany);
    $info =[];
    $info = $_GET['info'];
    // var_dump($info);   
    $sql = "SELECT id,admin_name,system_name FROM system_info WHERE id='$id'";
    $query = mysqli_query($conn,$sql);
    if (mysqli_num_rows($query) == 0){
        echo "Sorry Your Company Does Not In Our Database";
    }else{
        while($row = mysqli_fetch_array($query)){
            $admin = $row['admin_name'];
            $system_name = $row['system_name'];
        }
        // echo "Welcome ".$admin." Your Company is ".$system_name." And You Will Go To Search On ".$company;
        if ($tocompany == "hspc"){
           header("Location: http://localhost/bank_2/check.php?sys=".$system_name."&info=".$info);
        }elseif($tocompany == "cib"){
            header("Location: http://localhost/bank_1/check.php?sys=".$system_name."&info=".$info);
        }else {echo "There Is No Company Named : ".$tocompany;}
    }

}

if (isset($_GET['sys']) && isset($_GET['result'])){
    $system_name = $_GET['sys'];
    $result = [];
    $result = $_GET['result'];
    if($system_name == "cib"){
    header("Location: http://localhost/bank_1/result.php?result=".$result);
    }elseif($system_name == "hspc"){
        header("Location: http://localhost/bank_2/result.php?result=".$result);
    }else{echo "ERROR";}
}//else{echo "something wrong ";}

if (isset($_GET['sys']) && $_GET['nodata']){
    $system_name = $_GET['sys'];
    $result = $_GET['nodata'];
    if($system_name == "cib"){
        header("Location: http://localhost/bank_1/result.php?nodata=".$result);
        }elseif($system_name == "hspc"){
            header("Location: http://localhost/bank_2/result.php?nodata=".$result);
        }else{echo "ERROR";}
    }//else{echo "something wrong";}




?>