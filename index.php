<?php

include_once("koneksi.php");

$result = mysqli_query($kon,"SELECT * FROM todo ORDER BY id DESC");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Evaluasi</title>
</head>
<body>
    <center><h1>Home</h1></center>
    <a href="tambah.php" class="btn btn-success">Tambah todo</a><br><br>
    <a href="logout.php" class="btn btn-info">keluar</a><br/><br/>
    <hr>
    <div class="container">
    <table width="50%" border="0">
        <tr>
            <th>id</th> <th>Todo</th> <th>status</th> <th>More</th>
        </tr>
        <?php 
        while($user = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['todo']."</td>";
            echo "<td>".$user['status']."</td>";
            echo "<td><a href='edit.php?id=$user[id]'>Edit</a></td>"; 
            echo "<td><a href='delete.php?id=$user[id]'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>