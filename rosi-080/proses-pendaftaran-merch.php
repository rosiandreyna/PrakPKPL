<?php

include("config.php");

if(isset($_POST['send'])){

    $item = $_POST['item'];
    $price = $_POST['price'];
    $edition = $_POST['edition'];

    $sql = "INSERT INTO merch (item, price, edition) VALUE ('$item', '$price', '$edition')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>