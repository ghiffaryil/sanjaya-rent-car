<?php 

date_default_timezone_set('Asia/Jakarta');

//PENGATURAN UNTUK AMBIL LINK
// $Link_Website = "https://sanjaya-rent-car.com/";
$Link_Website = "http://127.0.0.1/sanjaya-rent-car/";
$Link_Sekarang = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//PENGATURAN UNTUK AMBIL LINK

$Waktu_Sekarang = date("Y-m-d H:i:s");
$Waktu_Sekarang_Format_ymdHis = date("ymdHis");

$Email_SMTP_1 = "notification@sanjaya-rent-car.com";
$Password_Email_SMTP_1 = "SuksesBersama2022";
$Nama_SMTP_1 = "Sanjaya Rental Mobil";
$Port_SMTP_1 = 587;
$Host_SMTP_1 = "srv72.niagahoster.com";


 ?>