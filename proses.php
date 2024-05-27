<?php

    session_start();

    include_once("./connect.php");

    if (isset($_POST['email']) && isset($_POST['password'])){

        $email = $_POST['email'];

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($db, $sql);

    }
?>