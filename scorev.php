<?php  

include('db.php');
$sql = "SELECT * FROM score";  
$result = mysqli_query($con, $sql);  
?>

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        #h{
            background-color: aqua;
            margin-left: 19px;
            font-size: 40px;
            border-radius: 9px;
            color: black;
        }
        #f{
            background-color: aqua;
            margin-left: 5px;
            margin-left: 19px;
            font-size: 40px;
            border-radius: 9px;
            color: black;

        }
    </style>
</head>  
<body>  
    <div>
                    <a href="score.php" Style="text-decoration: none"; id="f"  ><i class="fa-solid fa-circle-left"></i> Back</a>
                    <a href="mainpage.php" Style="text-decoration: none"id="h"; ><i class="fa-solid fa-house"></i> Home</a>
    </div>
                    
    <div class="container">
        <h3> Score Data</h3>
        <div class="table-responsive">  
            <table class="table table-striped">  
                <tr> 
                    <th>ID</th>   
                    <th>Match ID</th>  
                    <th>Team ID</th>  
                    <th>Score</th>  
                    <th>Result</th> 
                    <th>Action</th>
                </tr>  
                <?php  
                while($row = mysqli_fetch_array($result))  
                {  
                ?>  
                <tr>
                    <td><?php echo $row["id"]; ?></td>    
                    <td><?php echo $row["match_id"]; ?></td>  
                    <td><?php echo $row["team_id"]; ?></td>  
                    <td><?php echo $row["score"]; ?></td>  
                    <td><?php echo $row["result"]; ?></td>
                    <td>
                        <a href="updatescore.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
                        <a href="scoredel.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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
