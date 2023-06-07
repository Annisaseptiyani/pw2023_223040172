<?php
session_start();
//cek cookie
if(isset($_COOKIE["login"])){
  if($_COOKIE['login'] == 'true') {
    $_SESSION['login'] = true;
  }
}

require 'function.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

 $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");

 //cek username
 if (mysqli_num_rows($result) === 1 ){

    // cek password
    $row = mysqli_fetch_assoc($result);
  if  (password_verify($password, $row["password"])) {
    //set session
    $_SESSION["login"] = true;

    //cek remember me
    if(isset($_POST['remember'])){
       //buat cookie
      setcookie('id',$row['id'],time()+60);
      setcookie('key',hash('sha256',$row['username']),time()+60);
    }

    header("Location:index1.php");
    exit;
    
  }

 }
  $error= true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman kogin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

</head>
<body id="bg-login" >
  <div class="box-login">

 <h1>Halaman login</h1>

 <?php if(isset($error)):?>
    <p tyle="color: red; font-style: italic">username/password salah</p>

    <?php endif; ?>

    <form action="" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>
<div>


</body>
</html>