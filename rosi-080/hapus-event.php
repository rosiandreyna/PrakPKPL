<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM events WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list-event.php');
    } else {
        die("Event hasn't deleted yet");
    }

} else {
    die("Access Denied");
}

?>