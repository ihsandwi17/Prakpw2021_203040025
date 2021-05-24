<?php 
/*
Nur Ihsan Dwi 
203040025
https://github.com/ihsandwi17/pw2021_203040025
Pertemuan 4 - 27 Februari 2021
Mempelajari Function
*/
?>

<?php 
    //Date
    //Untuk menampilkan tanggal dengan format tertentu
    //echo date("l, d-M-Y");

    //time
    //Unix Timestamp / EPOCH time
    //detik yang sudah berlalu sejak 1 Januari 1970
    //echo time();
    //echo date ("d M Y", time() - 60*60*24*100);

    //mktime
    //membuat sendiri detik
    //mktime (0,0,0,0,0,0)
    //jam, menit, detik, bulan, tanggal, tahun
    //echo date("l", mktime (0,0,0,6,04,2002));

    //strtotime
    echo date("l", strtotime("06 April 2002"));
?>