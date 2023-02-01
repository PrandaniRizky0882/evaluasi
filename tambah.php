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
    <a href="index.php" class="btn btn-danger">Beranda</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="insert">
        <table width="50%" border="1">
            <tr>
                <td>todo</td>
                <td>:</td>
                <td><textarea input type="text" name="todo" size="30" required></textarea></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type="text" class="hidden" name="status" size="30" value="sedang dikerjakan" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="tambah"></td>
            </tr>
        </table>
    </form>

    <?php 
    if(isset($_POST['Submit'])) {
        $todo = $_POST['todo'];
        $status = $_POST['status'];

        // koneksi 
        include("koneksi.php");

        // memasukan data
        $result = mysqli_query($kon,"INSERT INTO todo(todo,status)values('$todo','$status')");

        // echo "data disave. <a href='index.php'>Kembali</a>";
        
        echo "<script>
        alert('data berhasil ditambah!')
        window.location.href='index.php'
        </script>";
    }
    ?>
</body>
</html>