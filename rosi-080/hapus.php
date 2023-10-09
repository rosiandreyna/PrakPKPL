<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM calon_member WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list-member.php');
    } else {
        die("Member hasn't deleted yet");
    }

} else {
    die("Access Denied");
}

?>