<?php 
/*
Nur Ihsan Dwi 
203040025
https://github.com/ihsandwi17/pw2021_203040025
Pertemuan 2 - 10 Februari 2021
Mempelajari sintaks dasar php
*/
?>

<?php
// Pertemuan 2
// Sintaks PHP

// Standar Output
// echo, print,
// print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama1 = "Nur Ihsan Dwi";
// echo "Halo, nama saya $nama1";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / concatenation / concat
// . 
// $nama_depan = "Nur";
// $nama_belakang = "Ihsan";
// echo $nama_depan . " " . $nama_belakang;

//assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Nur ";
// $nama .= " ";
// $nama .= "ihsan ";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1")

// identitas
// ===, !===
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x <20 || $x % 2 == 0);
?>