<?php

include("config.php");

if(isset($_POST['send'])){

    $event_name = $_POST['event_name'];
    $date = $_POST['date'];
    $promoter = $_POST['promoter'];

    $sql = "INSERT INTO events (event_name, date, promoter) VALUE ('$event_name', '$date', '$promoter')";
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