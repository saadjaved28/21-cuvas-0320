<?php
include('db.php');

$sql = "SELECT * FROM stadium";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Stadiums</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <a href="stadium.php" style="text-decoration: none;">Back</a>
    <a href="mainpage.php" style="text-decoration: none;">Home</a>

    <div class="container mt-4">
        <h3 class="text-center">Cricket Stadiums</h3>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Stadium Name</th>
                        <th>Stadium Location</th>
                        <th>Stadium Capacity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["stadium_name"]; ?></td>
                            <td><?php echo $row["stadium_location"]; ?></td>
                            <td><?php echo $row["stadium_capacity"]; ?></td>

                            <td>
                                <a href="stadiumdelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                <a href="stadiumupdate.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
