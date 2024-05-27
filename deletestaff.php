<?php

    include_once("./connect.php");

    $id = $_GET["id"];

    $query = mysqli_query($db, "DELETE FROM datastaff WHERE id=$id");    

    header("Location: datastaff.php");
?>