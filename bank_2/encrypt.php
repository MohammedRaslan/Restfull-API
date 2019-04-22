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

function bug($s){
    
        $len = strlen($s)-1;
        $temp ='';
        $i = 0;
        while($i < $len){
           $temp .= $s[$i];
           $i++;
        }
        return $temp;
    }

?>