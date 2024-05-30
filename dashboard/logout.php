<?php
session_start();
session_destroy();

unset($_COOKIE["Cookie_1_Sanjaya"]);
unset($_COOKIE["Cookie_2_Sanjaya"]);
unset($_COOKIE["Cookie_3_Sanjaya"]);

echo "<script>alert('Logout Berhasil');document.location.href='login.php';</script>";
?>