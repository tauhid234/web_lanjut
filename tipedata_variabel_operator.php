<?php 

// ARITMATIKA

$a = 20;
$b = 10;

$penjumlahan = $a + $b;
$pengurangan = $a - $b;
$pembagian   = $a / $b;
$perkalian   = $a * $b;
$sisa_hasil  = $a % $b;

print " <h1>Aritmatika</h1><p/>
       a = $a <br>
       b = $b <p/>
       <li>Hasil Penjumlahan antara a dan b adalah $penjumlahan</li> <br>
       <li>Hasil Pengurangan antara a dan b adalah $pengurangan</li> <br>
       <li>Hasil Pembagian antara a dan b adalah $pembagian</li> <br>
       <li>Hasil Perkalian antara a dan b adalah $perkalian</li> <br>
       <li>Hasil Sisa Hasil antara a dan b adalah $sisa_hasil</li>";


// PENUGASAN

$kecepatan_mobil = 450;

//Contoh Kasus :
//Jika ada kendaraan truk pada jarak 200km maka kecepatan yang harus di kurangi untuk menyalip adalah?

$kecepatan_mobil -= 200;

echo "<p><h1>Penugasan</h1></p>
      Kecepatan mobil saat ini 450 km/jam<br>
      Contoh Kasus : Jika ada kendaraan truk pada jarak 200km maka kecepatan yang harus di kurangi untuk menyalip adalah?<p/>
      Untuk menyalip truk kecepatan harus $kecepatan_mobil km/jam<p/>";


//BITWISE

$bil1 = 19;      
$bil2 = 12;

$and = $bil1 & $bil2;
$or  = $bil1 | $bil2;
$xor = $bil1 ^ $bil2;
$not = $bil1 & ~ $bil2;
$shift_right =  $bil1 >> $bil2;
$shift_left  =  $bil1 << $bil2;

echo "<h1>Bitwise</h1><p/>
      bil1 = $bil1 <br>
      bil2 = $bil2 <p/>
      <li>Hasil dari Opertaor bitwise bil1 & bil2 = $and </li><br>
      <li>Hasil dari Operator bitwise bil1 | bil2 = $or </li><br>
      <li>Hasil dari operator bitwise bil1 ^ bil2 = $xor </li><br>
      <li>Hasil dari operator bitwise bil1 ~ bil2 = $not</li><br>
      <li>Hasil dari operator bitwise bil1 >> bil2 = $shift_right</li><br>
      <li>Hasil dari operator bitwise bil1 << bil2 = $shift_left</li><p/>";

//PERBANDINGAN

$angka1 = 150;
$angka2 = 250;

echo "<h1>Perbandingan</h1><p/>";
echo "<li>Hasil dari $angka1 dan $angka2 operator perbandingan == adalah ", var_dump($angka1 == $angka2), "</li><br>";
echo "<li>Hasil dari $angka1 dan $angka2 operator perbandingan === adalah ", var_dump($angka1 === $angka2), "</li><br>";
echo "<li>Hasil dari $angka1 dan $angka2 operator perbandingan != adalah ", var_dump($angka1 != $angka2), "</li><br>";
echo "<li>Hasil dari $angka1 dan $angka2 operator perbandingan <> adalah ", var_dump($angka1 <> $angka2), "</li><br>";
echo "<li>Hasil dari $angka1 dan $angka2 operator perbandingan !== adalah ", var_dump($angka1 !== $angka2), "</li><br>";
echo "<li>Hasil dari $angka1 dan $angka2 operator perbandingan < adalah ", var_dump($angka1 < $angka2), "</li><br>";
echo "<li>Hasil dari $angka1 dan $angka2 operator perbandingan > adalah ", var_dump($angka1 > $angka2), "</li><br>";
echo "<li>Hasil dari $angka1 dan $angka2 operator perbandingan <= adalah ", var_dump($angka1 <= $angka2), "</li><br>";
echo "<li>Hasil dari $angka1 dan $angka2 operator perbandingan >= adalah ", var_dump($angka1 >= $angka2), "</li><br>";

//LOGIKA

$int1  = 20;
$int2  = 14;

echo "<h1>Logika</h1><p/>
      int1  = $int1<br>
      int2  = $int2<p/>
      <li>Hasil dari int1 dan int2 operator logika and adalah = ",var_dump($int1 and $int2),"</li><br>",
      "<li>Hasil dari int1 dan int2 operator logika && adalah = ",var_dump($int1 && $int2),"</li><br>",
      "<li>Hasil dari int1 dan int2 operator logika or adalah = ",var_dump($int1 or $int2),"</li><br>",
      "<li>Hasil dari int1 dan int2 operator logika || adalah = ",var_dump($int1 || $int2),"</li><br>",
      "<li>Hasil dari int1 dan int2 operator logika xor adalah = ",var_dump($int1 xor $int2),"</li><br>",
      "<li>Hasil dari int1 dan int2 operator logika != adalah = ",var_dump($int1 != $int2),"</li><br>";
