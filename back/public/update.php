<?php
include 'config.php';
$id=$_GET['updateid'];
$sql="Select * from `users` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];
$telefon=$row['telefon'];
$cim=$row['cim'];

if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $telefon=$_POST['telefon'];
    $password=$_POST['password'];
    $cím=$_POST['cim'];

    $sql = "update `users` set id=$id, username='$username',
    email='$email', password='$password', telefon='$telefon',
    cim='$cim' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result){
        header('location:display.php');
    }else{
        "A frissítés nem sikerült";
    }

}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frissítés</title>
</head>
<body>
    <div>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>Felhasználónév</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
    aria-describedby="emailHelp" placeholder="Kérlek add meg a felhasználóneved" name="username" autocomplete="off"  value=<?php echo $username;?>>
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1"
    aria-describedby="emailHelp" placeholder="Kérlek add meg az email címed" name="email" autocomplete="off"  value=<?php echo $email;?>>
</div>

<div class="mb-3">
    <label>Telefonszám</label>
    <input type="number" class="form-control" id="exampleInputEmail1"
    aria-describedby="emailHelp" placeholder="Kérlek add meg a telefonszámodat" name="telefon" autocomplete="off"  value=<?php echo $telefon;?>>
</div>

<div class="mb-3">
    <label>Cím</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     aria-describedby="emailHelp" placeholder="Kérlek add meg a címedet" name="cim" autocomplete="off"  value=<?php echo $cim;?>>
</div>

<div class="mb-3">
    <label>Jelszó</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
    aria-describedby="emailHelp" placeholder="Kérlek add meg a jelszavad" name="password" autocomplete="off"  value=<?php echo $password;?>>
</div>

  <button type="submit" class="btn btn-primary" name="submit">Küldés</button>
    </form>
</div>

  </body>
</html>

    </div>
</body>
</html>
