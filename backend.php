
<?php
/*
require_once('db.php');
$query = "select * from users";
$result = mysqli_query($con,$query);
*/

require_once 'config/db.php';
require_once 'config/functions.php';

$result = display_data();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    <title>fetched Data</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Players</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-boardered">
                            <tr class="p-3 mb-2 bg-dark text-white">
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>

                            <tr>
                                <?php
                                    while ($row = mysqli_fetch_assoc($result))
                                    { 
                                ?>

                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['contact'] ?></td>
                                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                                    <td><a href="#" class="btn btn-danger">Delete</a></td>    
                                </tr>
                                <?php 
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>