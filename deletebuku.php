<?php

    include_once("./connect.php");

    $id = $_GET["id"];

    $query = mysqli_query($db, "DELETE FROM databuku WHERE id=$id");    

    header("Location: databuku.php");
?>