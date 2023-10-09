<?php

include("config.php");

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $membership_type = $_POST['membership_type'];
    $membership_period = $_POST['membership_period'];

    $sql = "INSERT INTO calon_member (name, age, phone_number, gender, nationality, address, membership_type, membership_period) VALUE ('$name', '$age', '$phone_number', '$gender', '$nationality', '$address', '$membership_type', '$membership_period')";
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