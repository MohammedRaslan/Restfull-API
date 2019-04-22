<?php
include_once("config.php");
include_once("encrypt.php");


$p =3;
$q = 7;
$n = $p*$q;
$euler = ($p-1)*($q-1);
$k = 7;

$m =109;

$c = pow($m,$k)%$n;
echo $c.'<br>';
$e=7 ;

$m2=$c%$n;
echo $m2;




// echo intostring(' 065 109 097 110 121');
// var_dump(intoAscii('6458423'));
// echo intostring(' 054 052 053 056 052 050 051');

?>