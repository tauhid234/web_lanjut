<?php 

$nilai = 80;

if($nilai >= 85 && $nilai <=100){
    echo "A";
}elseif($nilai >= 70 && $nilai <= 84){
    echo "B";
}elseif($nilai >= 60 && $nilai <= 70){
    echo "C";
}elseif($nilai >= 50 && $nilai <= 60){
    echo "D";
}elseif($nilai < 50){
    echo "E";
}