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

<div class="container my-5">
    <button class="btn btn-primary my-5"><a href="createuser.php" class="text-light">Felhasználó hozzáadása</a>

    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
      <th scope="col">Telefon</th>
      <th scope="col">Cím</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php

$sql="Select * from `users`";
$result = mysqli_query($conn, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $telefon=$row['telefon'];
        $password=$row['password'];
        $cim=$row['cim'];
        echo ' <tr class="align-middle">
            <th scope="row">'.$id.'</th>
            <td>'.$username.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>'.$telefon.'</td>
            <td>'.$cim.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Frissít</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Töröl</a></button>
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
