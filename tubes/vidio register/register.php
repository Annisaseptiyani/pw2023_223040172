<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
       label {
        display:block;
       }
       body{
        background-color:#002939;
       }
       ul{
        color:#ffff;
       }
       h1{
        color:#ffff;
       }
       .btn{
        background-color:#fff;
        padding:10px;
       }


        </style>
</head>
<body>
    <h1>Halaman Register </h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username: </label>
                <input type="text" name="username" id="username">
</li>
<li>
        <label for="password">password :</label>
        <input type="password" name="password" id="password">
</li>
<li>
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password">
</li>
<li>
    <buttom type="submit" name="register" class="btn">Register</buttom>
    </li>
    </ul>

    </form>
</body>
</html>