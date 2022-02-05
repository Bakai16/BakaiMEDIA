<?php
    if(isset($__POST["submitButton"])){
         echo "Форма тапшырылды";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to BAKAIMEDIA</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
  <div class="signInContainer">
    <div class="signInContainer__column">
        <div class="signInContainer__column__header">
            <img src="assets/img/logo.png" title="logo" src="Site logo">
            <h3>Sign In</h3>
            <span>to continue to BAKAIMEDIA</span>
        </div>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submitButton" value="SUBMIT">
        </form>
        <a href="register.php" class="signInContainer__column__signInMessage">Need an account? Sign up here!</a>
    </div>
  </div>
</body>
</html>