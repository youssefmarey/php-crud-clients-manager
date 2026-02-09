<?php

require_once './conection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO clients(name , email , phone , address) VALUES (? , ? , ? , ?)";
    $stmt = mysqli_prepare($connection , $query);
    mysqli_stmt_bind_param($stmt , 'ssss' , $name , $email , $phone , $address);
    $result = mysqli_stmt_execute($stmt);

    if($result) {
        header('location:index.php');
        exit();
    }
}