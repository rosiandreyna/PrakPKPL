<?php

include("config.php");

if(isset($_POST['save'])){

    $id = $_POST['id'];
    $event_name = $_POST['event_name'];
    $date = $_POST['date'];
    $promoter = $_POST['promoter'];
    
    $sql = "UPDATE events SET event_name='$event_name', date='$date', promoter='$promoter' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-event.php');
    } else {
        die("Update Failed");
    }


} else {
    die("Access Denied");
}

?>
