<?php
require_once 'conection.php';

$query = "SELECT * FROM clients";
$result = mysqli_query($connection , $query);
$clients = mysqli_fetch_all($result , MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>My Shop</title>
</head>

<body>
    <div class="container my-5">
        <h2>List Of Client</h2>
        <a href="./create.php" role="button" class="btn btn-primary">New Client</a>
        <br>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Action</th>
            </thead>
            <tbody>

            <?php  foreach($clients as $client): ?>
                <tr>
                    <td><?= $client['id'] ?></td>
                    <td><?= $client['name'] ?></td>
                    <td><?= $client['email'] ?></td>
                    <td><?= $client['phone'] ?></td>
                    <td><?= $client['address'] ?></td>
                    <td><?= $client['create_at'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $client['id'] ?>" role="button" class="btn btn-sm btn-primary">Edit</a>
                        <a href="delete.php?id=<?= $client['id'] ?>" role="button" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>