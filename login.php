<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <form action="login_action.php" method="post">
        <h1>Login</h1>
        <div>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required>
        </div>
        </br>
        <div>
            <label for="password">Passw :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <section>
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="register.php" class="btn btn-success">Register</a>
        </section>
        </div>
    </form>
</body>
</html>

