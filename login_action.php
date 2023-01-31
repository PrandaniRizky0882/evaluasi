<?php
session_start();

include "koneksi.php";

$nama = $_POST["nama"];
$p = md5($_POST["password"]);

$sql = "SELECT * FROM user WHERE nama='".$nama."' AND password='".$p."' limit 1";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id"]=$row["id"];
		$_SESSION["nama"]=$row["nama"];
		$_SESSION["email"]=$row["email"];
		$_SESSION["password"]=$row["password"];
	

		header("Location:register.php");
		
	}else {
		header("Location:index.php");
	}
?>