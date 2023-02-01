<?php

include_once 'koneksi.php';

if (isset($_POST['update'])) {
    
    $id = $_POST['id_todo'];
    $todo = $_POST['todo'];
    $status = $_POST['status'];

    $result = mysqli_query($kon, "UPDATE todo SET todo='$todo', status='$status' WHERE id_todo=$id");

    header("location:index.php");

}
?>
<?php 

$id = $_GET['id'];

$result = mysqli_query($kon, "SELECT * FROM todo WHERE id_todo=$id");

while ($user = mysqli_fetch_array($result)) {
    
    $todo = $user['todo'];
    $status = $user['status'];

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <a href="index.php">Back</a>
    <br></br>

    <form name="update" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Todo</td>
                <td><input type="text" name="todo" value=<?php echo $todo; ?>></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><select class="form-control" name="status">
                    <?php if ($konten['status'] == "Selesai") { ?>
                        <option value="Sedang dikerjakan">Sedang dikerjakan</option>
                        <option value="Sedang dikerjakan">Sedang dikerjakan</option>
                    <?php }else { ?>
                        <option value="Selesai">Selesai</option>
                        <option selected value="Sedang dikerjakan">Sedang dikerjakan</option>
                    <?php } ?>
                </select></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_todo" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>  
</body>
</html>