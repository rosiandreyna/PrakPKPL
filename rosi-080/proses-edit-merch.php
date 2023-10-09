<?php

include("config.php");

if(isset($_POST['save'])){

    $id = $_POST['id'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $edition = $_POST['edition'];
    

    $sql = "UPDATE merch SET item='$item', price='$price', edition='$edition' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-merch.php');
    } else {
        die("Update Failed");
    }


} else {
    die("Access Denied");
}

?>
