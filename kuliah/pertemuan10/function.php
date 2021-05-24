<?php
/*
Nur Ihsan Dwi 
203040025
https://github.com/ihsandwi17/pw2021_203040025
Pertemuan 10 - 28 April 2021
Mempelajari Koneksi DB dan Insert Data
*/

// koneksi ke database
$conn = mysqli_connect("localhost", "pw1", "");

// memilih database
mysqli_select_db($conn, "mahasiswa");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
?>