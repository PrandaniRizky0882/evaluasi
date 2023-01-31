<?php
require('koneksi.php');
session_start();

if (isset($_POST['nama']) && isset($_POST['password'])){
    $nama = htmlEntities($_POST['nama'],ENT_QUOTES);
    $password = htmlEntities($_POST['password'],ENT_QUOTES);

    $query = "INSERT INTO `user` (nama, password,email) VALUES ('$nama', '$password','$email')";
    $result = mysqli_query($kon, $query);
    if($result){
       header("Location:login.php");
    }
    else
    {
        echo "data tidak bisa masuk";
    }    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="" method="post">
        <div>
            <label for="nama">nama:</label>
            <input type="text" name="nama" id="nama" required><br>
        </div>
</br>
        <div>
            <label for="email">email:</label>
            <input type="text" name="email" id="email" required><br>
        </div>
</br>
        <div>
            <label for="password">Passw:</label>
            <input type="password" name="password" id="password" required><br>
        </div>
</br>
        <section>
            <button type="submit" class="btn btn-success">register</button>
            <a href="login.php" class="btn btn-danger">Back</a>
        </section>
    </div>
</body>
</html>
