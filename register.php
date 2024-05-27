<?php
    session_start();
    if(isset($_SESSION['email'])){
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    <form method="POST" action="./registerproses.php">
        <label for="email">Email :</label><br>
        <input type="text" id="email" name="email"><br>

        <label for="password">Password :</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="register">
    </form>
</body>
</html>