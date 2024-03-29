<?php
    // require_once("includes/config.php");   
    require_once("includes/classes/FormSanitizer.php");
    // require_once("includes/classes/Account.php");

    $account = new Account($con);

    if(isset($__POST["submitButton"])){
        //  echo "Форма тапшырылды";
         $firtName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
         $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
         $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
         $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
         $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
         $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
         $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);
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
            <h3>Sign Up</h3>
            <span>to continue to BAKAIMEDIA</span>
        </div>
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
        <a href="login.php" class="signInContainer__column__signInMessage">Already have an account? Sign in here!</a>
    </div>
  </div>
</body>
</html>