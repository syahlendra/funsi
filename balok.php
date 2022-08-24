<?php
//fungsi
$panjang = 10;  
$luas = 10;
$tinggi= 12;
function balok($panjang,$l,$tinggi){
    return( $panjang*$luas*$tinggi);
}
//menampilkan   
echo "luas balok tersebut adalah =",balok($panjang,$luas,$tinggi);
?>
