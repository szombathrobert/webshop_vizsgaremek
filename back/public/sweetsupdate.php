<?php
include 'config.php';
$id=$_GET['updateid'];
$sql="Select * from `sweets` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$nev=$row['nev'];
$gyarto=$row['gyarto'];
$kategoria=$row['kategoria'];
$kep=$row['kep'];
$reszletek=$row['reszletek'];
$ar=$row['ar'];
$darab=$row['darab'];

if (isset($_POST['submit'])){
    $nev=$_POST['nev'];
    $gyarto=$_POST['gyarto'];
    $kategoria=$_POST['kategoria'];
    $kep=$_POST['kep'];
    $reszletek=$_POST['reszletek'];
    $ar=$_POST['ar'];
    $darab=$_POST['darab'];


    $sql = "update `sweets` set id=$id, nev='$nev',
    gyarto='$gyarto', kategoria='$kategoria', kep='$kep',
    reszletek='$reszletek', ar='$ar', darab='$darab' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result){
        header('location:sweets.php');
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
    <label>Név</label>
    <input type="text" class="form-control" id="exampleInputNev"
    aria-describedby="NévHelp" placeholder="Kérlek add meg termék nevét" name="nev" autocomplete="off"  value=<?php echo $nev;?>>
</div>

<div class="mb-3">
    <label>Gyártó</label>
    <input type="text" class="form-control" id="exampleInputGyarto"
    aria-describedby="gyartoHelp" placeholder="Kérlek add meg a gyártó nevét" name="gyarto" autocomplete="off"  value=<?php echo $gyarto;?>>
</div>

<div class="mb-3">
    <label>Kategoria</label>
    <input type="text" class="form-control" id="exampleInputkategoria"
    aria-describedby="kategoriaHelp" placeholder="Kérlek add meg a kategóriát" name="kategoria" autocomplete="off"  value=<?php echo $kategoria;?>>
</div>

<div class="mb-3">
    <label>Kép</label>
    <input type="text" class="form-control" id="exampleInputkep"
     aria-describedby="KepHelp" placeholder="Kérlek add meg a linket" name="kep" autocomplete="off"  value=<?php echo $kep;?>>
</div>

<div class="mb-3">
    <label>Részletek</label>
    <input type="text" class="form-control" id="exampleInputreszletek"
    aria-describedby="reszletekHelp" placeholder="Kérlek add meg a részleteket" name="reszletek" autocomplete="off"  value=<?php echo $reszletek;?>>
</div>

<div class="mb-3">
    <label>Ár</label>
    <input type="text" class="form-control" id="exampleInputAr"
    aria-describedby="arHelp" placeholder="Kérlek add meg az árat" name="ar" autocomplete="off"  value=<?php echo $ar;?>>
</div>

<div class="mb-3">
    <label>Darab</label>
    <input type="number" class="form-control" id="exampleInputDarab"
    aria-describedby="darabHelp" placeholder="Kérlek add meg a Darabszámot" name="darab" autocomplete="off"  value=<?php echo $darab;?>>
</div>

  <button type="submit" class="btn btn-primary" name="submit">Küldés</button>
    </form>
</div>

  </body>
</html>

    </div>
</body>
</html>
