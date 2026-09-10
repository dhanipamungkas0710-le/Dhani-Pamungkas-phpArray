<?php

require_once('connection.php');
echo "<br>";
echo "<br>";

function arrayFromDatabase(){
    global $koneksi;


$queryData = mysqli_query($koneksi, "SELECT * FROM tb_siswa");

$proses = mysqli_fetch_all($queryData, MYSQLI_ASSOC);

foreach ($proses as $rowData) {
    echo "<br>";
    echo "NIS: ". $rowData['NIS']."<br>";
    echo "name_siswa: ". $rowData['name_siswa']."<br>";
    echo "kelas: ". $rowData['kelas']."<br>";
}
}
function latihanArrayScope(){
    $siswa = [[
        "NIS" => "2008",
        "NAMA" => "Dhani Pamungkas",
        "JURUSAN" => "Rekayasa Perangkast Lunak",
        "NILAI" => "90"
    ]
    ,
    [
        "NIS" => "2002",
        "NAMA" => "Jibril Ven Der Sar",
        "JURUSAN" => "Rekayasa Perangkat Lunak",
        "NILAI" => "87" 
    ]
    ];

   foreach($siswa as $tampilSiswa) {
    echo "NIS: ". $tampilSiswa["NIS"]. "<br>";
    echo "NAMA: ". $tampilSiswa["NAMA"]. "<br>";
    echo "JURUSAN: ". $tampilSiswa["JURUSAN"]. "<br>";
    echo "NILAI: ". $tampilSiswa["NILAI"]. "<br>";
   } 
}
   
echo "Array Manual: <br>-----------<br>";
latihanArrayScope();
echo "<br>";
echo "Array Database: <br>------------<br>";
arrayFromDatabase();


?>