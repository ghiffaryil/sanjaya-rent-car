<?php 
if(!((isset($_COOKIE['Cookie_1_Sanjaya'])) OR (isset($_COOKIE['Cookie_2_Sanjaya'])) OR (isset($_COOKIE['Cookie_3_Sanjaya'])) )){
	echo "<script>document.location.href='login.php';</script>";
}else{
	echo "<script>document.location.href='dashboard.php';</script>";
}
 ?>