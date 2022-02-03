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
    <title>Welcome to KyrgyzMedia</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
  <div class="signInContainer">
    <div class="signInContainer__column">
        <form method="POST">
            <input type="text" name="firstName" placeholder="Firs name" required>
            <input type="text" name="lasttName" placeholder="Last name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="email" name="email2" placeholder="Confirm email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password2" placeholder="Confirm Password" required>
            <input type="submit" name="submitButton" value="SUBMIT">
        </form>
    </div>
  </div>
</body>
</html>