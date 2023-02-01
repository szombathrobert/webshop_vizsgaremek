<?php
include 'config.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $telefon=$_POST['telefon'];
    $cim=$_POST['cim'];

    $sql="insert into `users` (username, email, telefon, password, cim) values('$username', '$email', '$telefon', '$password', '$cim')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Adatok sikeresen felvéve!";
    } else {
        die("<script>alert('Sikertelen csatlakozás.')</script>");
    }
}

?>


<!doctype html>
<html lang="hu">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Létrehozás</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
        <div class="form-group my-3">
            <label class="form-label">Név</label>
            <input type="text" class="form-control" placeholder="Add meg a neved!" name="username" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">E-mail</label>
            <input type="email" class="form-control" placeholder="Add meg az e-mail címed!" name="email" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">Cím</label>
            <input type="text" class="form-control" placeholder="Add meg a címed!" name="cim" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">Telefonszám</label>
            <input type="text" class="form-control" placeholder="Add meg a telefonszámod!" name="telefon" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">Jelszó</label>
            <input type="text" class="form-control" placeholder="Add meg a jelszavad!" name="password" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary my-2" name="submit">Mentés</button>
        <button class="btn btn-danger"><a href="display.php" class="text-light">Mégsem</a></button>
        </form>
    </div>

  </body>
</html>
