<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
   <h1>Aplikasi Perpustakaan</h1> 

   <a  href="./databuku.php">Klik Untuk Melihat Daftar Buku</a> <br>
   <a  href="./datastaff.php">Klik Untuk Melihat Daftar Staff</a> <br>

   <form action="logoutproses.php" method="POST">
        <button type="submit">LOGOUT</button>
    </form>
</body>
</html>