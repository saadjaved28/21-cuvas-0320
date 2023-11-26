<?php  
 include('db.php');
 $sql = "SELECT * FROM team";  
 $result = mysqli_query($con, $sql);  
 ?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 100%;
            overflow-x: auto;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 130%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #487eb0;
            color: white;
        }

        .btn {
            background-color: #487eb0;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 5px;
            transition: 0.8s;
        }

        .btn:hover {
            transform: scale(0.96);
        }
    </style>
</head>

<body>
    <div>
        <a href="team.php" style="text-decoration: none; "><i class="fa-solid fa-circle-left"></i>Back</a>
        <a href="mainpage.php" style="text-decoration: none;">Home</a>
    </div>

    <div class="container mt-4">
        <h3 class="text-center">Team Data</h3>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Team Name</th>
                        <th>Player ID</th>
                        <th>Captain</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["tname"]; ?></td>
                            <td><?php echo $row["pid"]; ?></td>
                            <td><?php echo $row["captan"]; ?></td>

                            <td>
                                <a href="teamdelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                <a href="teamupdate.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a>
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
