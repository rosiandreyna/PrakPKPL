<?php

include("config.php");

if(isset($_POST['save'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $membership_type = $_POST['membership_type'];
    $membership_period = $_POST['membership_period'];

    $sql = "UPDATE calon_member SET name='$name', age='$age', phone_number='$phone_number', gender='$gender', nationality='$nationality', address='$address', membership_type='$membership_type', membership_period='$membership_period' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-member.php');
    } else {
        die("Update Failed");
    }


} else {
    die("Access Denied");
}

?>
