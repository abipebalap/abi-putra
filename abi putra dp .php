<?php
echo " ARRAY = " . "<br>";
$sum = 0;

$bil = [1, 7, 8, 5, 9];
$l = count($bil);
for($i = 1; $i < $l; $i++){
    $sum = $sum + $bil[$i];
}
echo $sum;

echo " FOREACH =     ". "<br>";
foreach($bil as $key){
    echo $key;
    $sum = $sum + $key;
}
$sum = 0;
echo " FOR = " . "<br>";
$panjang = count($bil);
echo $sum;
for($a=1; $a<$panjang; $a++){
    $sum = $sum + $bil[$a];
}

echo " PERULANGAN = " . "<br>";
for($a = 30; $a<100; $a = $a+=3){
    echo"<br>$a</br>";
}

echo "contoh = " . "<br>";
for($a =2;$a<100;$a++){
    if( $bil%$a==0){
        echo "bukan bil prima";
    } else {
        echo "bil prima" ;
    }
}

echo "FLAG = " . "<br>"
$bil=7;
$flag=0;
for ($a=2;$a<100;$a++){
    if ($bil%$a==0){
        $flag++;
    }
}                                       