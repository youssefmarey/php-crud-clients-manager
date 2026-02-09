<?php

require_once 'conection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM clients WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        header('location:index.php');
        exit();
    } else {
        echo "Error";
    }
} else {
    header('location:index.php');
    exit();
}
