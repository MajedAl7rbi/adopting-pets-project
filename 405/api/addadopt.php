<?php

// includes the connections for database
include_once '../configs/connection.php';



$q = "INSERT INTO `Adopt`(`first_name`, `last_name`, `city`,
 `physical_address`, `date_of_birth`, `phone_number`, `email`, `owning_pets`) 
VALUES (?, ? , ? , ? , ? , ? , ?, ?)";

$s = $conn->prepare($q);
$s->execute(array(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['city'],
    $_POST['physical_address'],
    $_POST['age'],
    $_POST['phone'],
    $_POST['email'],
    $_POST['owning_pets'],
));