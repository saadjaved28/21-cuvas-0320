<?php  

include('db.php');
$sql = "SELECT * FROM `match`";  
$result = mysqli_query($con, $sql);  
?>

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 50px auto;
        }

        h3 {
            text-align: center;
            color: #333;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .btn {
            margin: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>  
<body>  
<a href="match.php" Style="text-decoration: none"; style="margin-left: 8px";> Back</a>
                    <a href="mainpage.php" Style="text-decoration: none";> Home</a>
                    
    <div class="container">
        <h3> Match Data</h3>
        <div class="table-responsive">  
            <table class="table table-striped">  
                <tr> 
                    <th>ID</th>   
                    <th>Match ID</th>  
                    <th>team_id_1</th>  
                    <th>team_id_2</th>  
                    <th>date_of match</th> 
                    <th>stadium</th>
                    <th>Action</th>
                </tr>  
                <?php  
                while($row = mysqli_fetch_array($result))  
                {  
                ?>  
                <tr>
                    <td><?php echo $row["id"]; ?></td>    
                    <td><?php echo $row["match_id"]; ?></td>  
                    <td><?php echo $row["team_id_1"]; ?></td>  
                    <td><?php echo $row["team_id_2"]; ?></td>  
                    <td><?php echo $row["date_of_match"]; ?></td>
                    <td><?php echo $row["stadium"]; ?></td>
                    <td>
                        <a href="matchupdate.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
                        <a href="matchdelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>  
                <?php  
                }  
                ?>  
                
            </table>  
        </div>
    </div>  
</body>  
</html>
