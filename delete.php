<?php 

include_once 'koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($kon, "DELETE FROM todo WHERE id_todo=$id");

header("Location:index.php");
?>