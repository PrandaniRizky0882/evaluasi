<?php 

include 'koneksi.php';

$id = $_GET['$id'];

mysqli_query($kon,"DELETE FROM todo WHERE id='$id'");

header("Location:index.php");
?>