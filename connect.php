<?php
$koneksi = mysqli_connect("localhost","root","");
if($koneksi) {
    echo "koneksi berhasil"."<br>";
}else { 
    echo "koneksi gagal"."<br>";
}

$db = mysqli_select_db($koneksi, "tibus.id");
if($db){
    echo "koneksi database sukses"."<br>";
} else {
    echo "koneksi database gagal"."<br>";
}  