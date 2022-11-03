<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require_once "header.php" ?>
<form action = "" method="post">
    <h3> Login </h3>
    <div class = "form-div">
     <input type="email" placeholder = "email" name = "email"> <br>
     <input type="password" placeholder = "password" name = "password"> <br>
     <button>  Login  </button>
</div>
</form>
<?php require_once "footer.php" ?>
</body>
</html>