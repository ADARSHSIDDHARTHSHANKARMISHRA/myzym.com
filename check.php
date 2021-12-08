<?php
$mass=(int)$_POST['n1'];
$height=(int)$_POST['n2'];
$bmi=($mass/$height/$height)*10000;
if($bmi<=18.5){
    echo "YOU ARE UNDER WEIGHT";
}
else if($bmi>18.5 && $bmi<=24.9){
    echo "YOU HAVE NORMAL WEIGHT";
}
else{
    echo "YOU ARE OVER WEIGHT";
}

?>
