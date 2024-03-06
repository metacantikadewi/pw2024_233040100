<?php
// 1. Membuat Arry
$shart = arry("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Meta", 2.5, false];

// 2. Mencetak isl Arry
// Mencetka 1 elemen pada array, menggunakanindex
echo $hart[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<br>";


// Mencetak seluruh ist arry
// digunakan khusus untuk debugging
//var_dump() atau print_r()
var_dump($shart);
echo "<br>";
print_r($bulan)
echo "<br>";
var_dump($mahasiswa);
echo "<br>"



// 3. Memanipulasi isl Arry
// Menambah isi array
//di akhir array; [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>"

// di awal array: arry_unshift()
array_unshift($mahasiswa, "233040100");
print_r($mahasiswa);
echo "<hr>"

// Menghapus isi arry
// di akhir: arry_pop()
// di awal: arry_shift()
arry_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);





echo "<div style=heig"