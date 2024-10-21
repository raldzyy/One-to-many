<?php
require 'db.php';

// Fetch all restaurants from the database
$stmt = $pdo->query("SELECT * FROM restaurants");
$restaurants = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babershop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .table {
            margin-top: 20px;
        }
        .table thead {
            background-color: #343a40;
            color: white;
        }
        .table tbody tr:hover {
            background-color: #f2f2f2;
        }
        .btn-primary {
            background-color: #28a745;
            border: none;
        }
        .btn-primary:hover {
            background-color: #218838;
        }
        .btn-info {
            background-color: #17a2b8;
        }
        .btn-info:hover {
            background-color: #138496;
        }
        .btn-warning:hover {
            background-color: #d39e00;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mt-4">Babershop</h1>
    <a href="edit.php" class="btn btn-primary mb-4">Add New Babershop</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($restaurants as $restaurant): ?>
                <tr>
                    <td><?php echo $restaurant['babershop_id']; ?></td>
                    <td><?php echo $restaurant['name']; ?></td>
                    <td><?php echo $restaurant['address']; ?></td>
                    <td><?php echo $restaurant['phone_number']; ?></td>
                    <td><?php echo $restaurant['email']; ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $restaurant['babershop_id']; ?>" class="btn btn-info">View</a>
                        <a href="edit.php?id=<?php echo $restaurant['babershop_id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $restaurant['babershop_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
