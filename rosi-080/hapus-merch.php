<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM merch WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list-merch.php');
    } else {
        die("Merchandise hasn't deleted yet");
    }

} else {
    die("Access Denied");
}

?>