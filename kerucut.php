<?php

//fungsi
$jari=28;
$tinggi=40;
$phi =22/7;
function kerucut($jari,$tinggi,$phi){
    return(1/3*( $phi*$jari*$tinggi));
}
//menampilkan   
echo "luas kerucut tersebut adalah =",kerucut($jari,$tinggi,$phi);
?>
