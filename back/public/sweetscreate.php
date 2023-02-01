<?php
include 'config.php';
if(isset($_POST['submit'])){
    $nev=$_POST['nev'];
    $gyarto=$_POST['gyarto'];
    $kategoria=$_POST['kategoria'];
    $kep=$_POST['kep'];
    $reszletek=$_POST['reszletek'];
    $ar=$_POST['ar'];
    $darab=$_POST['darab'];

    $sql="insert into `sweets` (nev, gyarto, kategoria, kep, reszletek, ar, darab) values('$nev', '$gyarto', '$kategoria', '$kep', '$reszletek', '$ar', '$darab')";
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
            <input type="text" class="form-control" placeholder="Add meg az édesség nevét!" name="nev" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">Gyártó</label>
            <input type="text" class="form-control" placeholder="Add meg az édesség gyártó azonosítóját!" name="gyarto" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">Kategória</label>
            <input type="text" class="form-control" placeholder="Add meg az édesség kategória azonosítóját!" name="kategoria" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">Kép</label>
            <input type="text" class="form-control" placeholder="Add meg az édesség képének linkjét!" name="kep" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">Részletek</label>
            <input type="text" class="form-control" placeholder="Add meg az édesség leírását!" name="reszletek" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">Ár</label>
            <input type="text" class="form-control" placeholder="Add meg az édesség árát!" name="ar" autocomplete="off">
        </div>
        <div class="form-group my-3">
            <label class="form-label">Db</label>
            <input type="text" class="form-control" placeholder="Add meg az édesség darabszámát!" name="darab" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary my-2" name="submit">Mentés</button>
        <button class="btn btn-danger"><a href="sweets.php" class="text-light">Mégsem</a></button>
        </form>
    </div>

  </body>
</html>
