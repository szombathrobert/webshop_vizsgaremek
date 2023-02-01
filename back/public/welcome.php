<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <title>Üdvözöljük!</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <div>
    <button class="btn btn-primary my-3"><a href="display.php" class="text-light">Users CRUD</a></button>
    </div>
    <div>
    <button class="btn btn-primary"><a href="sweets.php" class="text-light">Sweets CRUD</a></button>
    </div>
    <div class="my-3"><a href="logout.php">Kijelentkezés</a></div>
</body>
</html>
