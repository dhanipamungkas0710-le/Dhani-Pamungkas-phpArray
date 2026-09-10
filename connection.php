<?php

$host = "localhost";
$username = "root";
$passwoard = "";
$databaseName = "siswa_db";

mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

$koneksi = mysqli_connect($host, $username, $passwoard, $databaseName);

if(!$koneksi){
    echo "Koneksi Tidak Berhasil";
}else{
    echo "<h1 style='color:green'>PEMAIN TARKAM ANAK KAMPUNG SEBELAH</h1>";
    echo "LINE UP UCL: " .$databaseName;
}                   
