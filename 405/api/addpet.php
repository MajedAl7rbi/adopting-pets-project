<?php

// includes the connections for database
include_once '../configs/connection.php';



$q = "INSERT INTO `pets`(
    `first_name`, `last_name`, `city`, `physical_address`, `date_of_birth`,
    `phone_number`, `email`, `pet_name`, `pet_age`, `pet_kind`, `pet_image`) VALUES (?, ?, ?, ?, ? , ? , ? , ? , ? , ?, ?)";

$target_dir = "../uploads/";
$imageFileType = strtolower(pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION));
$img_dir  = 'img' . rand(1000, 1000000) . '.'. $imageFileType;
$target_file = $target_dir . $img_dir; 
$uploadOk = 1;
// Check if image file is a actual image or fake image
move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
$s = $conn->prepare($q);
$s->execute(array(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['city'],
    $_POST['physical_address'],
    $_POST['age'],
    $_POST['phone'],
    $_POST['email'],
    $_POST['petname'],
    $_POST['petage'],
    $_POST['petkind'],
    './uploads/'  . $img_dir,
));