<?php

require_once 'conection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location:index.php');
    exit();
}

$query = "SELECT * FROM clients WHERE id = ?";
$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if ($result) {
    $client = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <form class=" row g-3" method="post" action="./update.php?id=<?= $client['id'] ?>">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="inputName" value="<?= $client['name'] ?>">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputPassword4" value="<?= $client['email'] ?>">
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="inputZip" value="<?= $client['phone'] ?>">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?= $client['address'] ?>">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>