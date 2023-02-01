<?php
    include 'config.php';
?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="sweetscreate.php" class="text-light">Termék hozzáadása</a>

    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Név</th>
      <th scope="col">Gyártó</th>
      <th scope="col">Kategória</th>
      <th scope="col">Kép</th>
      <th scope="col">Részletek</th>
      <th scope="col">Ár</th>
      <th scope="col">Darab</th>
    </tr>
  </thead>
  <tbody>

    <?php

$sql="Select * from `sweets`";
$result = mysqli_query($conn, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['ID'];
        $nev=$row['nev'];
        $gyarto=$row['gyarto'];
        $kategoria=$row['kategoria'];
        $kep=$row['kep'];
        $reszletek=$row['reszletek'];
        $ar=$row['ar'];
        $darab=$row['darab'];
        echo ' <tr class="align-middle">
            <th scope="row">'.$id.'</th>
            <td>'.$nev.'</td>
            <td>'.$gyarto.'</td>
            <td>'.$kategoria.'</td>
            <td>'.$kep.'</td>
            <td>'.$reszletek.'</td>
            <td>'.$ar.'</td>
            <td>'.$darab.'</td>
            <td>
            <button class="btn btn-primary my-2"><a href="sweetsupdate.php?updateid='.$id.'" class="text-light">Frissít</a></button>
            <button class="btn btn-danger"><a href="sweetsdelete.php?deleteid='.$id.'" class="text-light">Töröl</a></button>
            </td>
        </tr>';
    }
}

?>


  </tbody>
</table>
</div>

    <button class="btn btn-danger"><a href="welcome.php" class="text-light">Vissza</a></button>
</body>
</html>
