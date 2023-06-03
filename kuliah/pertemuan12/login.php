<?php 
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Bukawarung</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
	<div class="box-login">
		<h2>Login</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login" class="btn">
		</form>
		<?php 
			if(isset($_POST['submit'])){
				include 'db.php';

				$user = mysqli_real_escape_string($conn, $_POST['user']);
				$pass = mysqli_real_escape_string($conn, $_POST['pass']);

				$cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$user'");
				$cek2 = mysqli_fetch_assoc($cek);
				if (password_verify($pass, $cek2['password'])){
					if(mysqli_num_rows($cek) > 0){
						$_SESSION['status_login'] = true;
						$_SESSION['a_global'] = $cek2;
						$_SESSION['id'] = $cek2['id'];
						echo header('Location: dashboard.php');
					}else{
						echo '<script>alert("Username atau password Anda salah!")</script>';
					}
				}

			}
		?>
	</div>
</body>
</html>