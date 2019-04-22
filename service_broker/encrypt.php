<?php
// This Function Take String And Return The Ascii Code Of it ^-^
function intoAscii($string)
{
    $len = strlen($string);
    $y = ' ';
    for ($i=0; $i<$len;$i++){
    
        if (ord($string[$i]) < 100){
    
            $y.='0'.''.ord($string[$i]).' ';
    
        }else
    
        $y.= ord($string[$i]).' ';
        
    }
    return $y;
}
// This Function Take Ascii Code And Return The String Value Of it ^-^
function intostring($ascii){
    $s = ' ';
    $array = str_split($ascii,4);
    $count = count($array);
    
    for ($i=0; $i<$count;$i++){
        $s.= chr($array[$i]);
    }
    return $s;
}

// KEY Generation
// (P,Q) Must Be Prime Numbers
function message_encrypt($ascii){
    $tempArr = [];
    $tempArr = explode(" ", $ascii);
    $P = 3; $Q = 7;
    $n = $P*$Q;
    $euler = ($P-1)*($Q-1);
    // Now We Choose e Must Be Comprime say With euler(7) 
    $e = 7;
    // Now Key Is (n,e)=>(21,7)
    // var_dump($tempArr);
    // return;
    $cipher = " ";
    $result = [];
    foreach($tempArr as $t){
        if($t == ' ' || $t == '')
                continue;
            $m = (int)$t;
            $cipher = ($m**$e)%$n ;
           $result[] = $cipher.' ';
        }
        return $result;
}

function message_decrypt($cipher){
    $tempArr = [];
    $tempArr = explode(" ",$cipher);
    $P = 3; $Q = 7;
    $n = $P*$Q;
    $euler = ($P-1)*($Q-1);
    $e = 7;
    // Now We Will Get D To Decrypt the Cipher
    $d = (2*$euler+1)/$e;
    $result = [];
    $m = " ";   
    foreach($tempArr as $t){
        if($t==' ' || $t= '' )
             continue;
             var_dump($t);
        $c = (int)$t;
        $m = pow($c,$d)%$n;
        $result[] = $m.' ';
    }
    return $result;
}
/*
{
    $x = "mohamed Raslan";
    echo "The String Is : ". $x.'<br>';
    $a =  intoAscii($x);
    echo "Its Ascii Value Is : ".$a.'<br>';
    $array = [];
    $array = message_encrypt($a);
    $f="";
    foreach($array as $h){
        $f .=$h ;
    } 
    echo "Encrypted Form Is : " .$f.'<br>' ;

    $array2 = [];
    $array2 = message_decrypt($f);
    $w = "";
    foreach($array2 as $l){
        $w .=$l;
    }
    echo "The Decrypted Form Is : ".$w;
    // $k = intostring($w);
}
function gcd($a, $h) 
{ 
    $temp; 
    while (1) 
    { 
        $temp = $a%$h; 
        if ($temp == 0) 
          return $h; 
        $a = $h; 
        $h = $temp; 
    } 
} 
{
    $P = 3; $Q = 7;
    $n = $P*$Q;
    echo "n=:".$n.'<br>';
    $euler = ($P-1)*($Q-1);
    echo "euler=:".$euler.'<br>';
    $e = 2;
    while($e < $euler){

        if (gcd($e,$euler)==1) 
        break; 
    else
        $e++; 
    }
    $d =0;
    while (1){
        if( (($e*$d)%$euler) == 1 ) 
            break;
        else 
            $d++;
        
    }


    $msg = 109;
    // Now We Will Get D To Decrypt the Cipher
    // $d = ((2*$euler)+1)/$e;
    echo "d=:".$d.'<br>';
    $cipher = pow($msg,$e)%$n;
    // $cipher = fmod($cipher,$n);
    // var_dump($cipher);
    echo "Cipher =:".$cipher.'<br>';
    $m = pow($cipher,$d)%$n;
    // $m = fmod($m,$n);
    echo "message=:".$m;
    // (e*d)%euler =1
}
*/

?>













