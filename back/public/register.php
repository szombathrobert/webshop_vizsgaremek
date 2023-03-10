<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
    $telefon = $_POST['telefon'];
    $cim = $_POST['cim'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password, telefon, cim)
					VALUES ('$username', '$email', '$password', '$telefon', '$cim')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Regisztráció sikeres!')</script>";
				$username = "";
				$email = "";
                $telefon = "";
                $cim = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Valami hiba történt!.')</script>";
			}
		} else {
			echo "<script>alert('Email cím már létezik!')</script>";
		}

	} else {
		echo "<script>alert('Jelszavak nem egyeznek!')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Regisztráció</p>
			<div class="input-group">
				<input type="text" placeholder="Felhasználónév" name="username" value="<?php echo $username; ?>" required>
			</div>
            <div class="input-group">
				<input type="number" placeholder="Telefonszám" name="telefon" value="<?php echo $_POST['telefon']; ?>" required>
            </div>
            <div class="input-group">
				<input type="cim" placeholder="Cím" name="cim" value="<?php echo $_POST['cim']; ?>" required>
            </div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Jelszó" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Jelszó ismét" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Regisztráció</button>
			</div>
			<p class="login-register-text">Van már fiókja?<a href="login.php"> Jelentkezzen be itt</a>.</p>
		</form>
	</div>
</body>
</html>
