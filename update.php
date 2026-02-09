<?php

require_once 'conection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    $query = "UPDATE clients SET name = ? , email = ? , phone = ? , address = ? WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, 'ssssi', $name, $email, $phone, $address, $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('location:index.php');
        exit();
    } else {
        echo "Error";
    }
} else {
    header('location: edit.php');
    exit();
}
