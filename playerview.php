<?php
include('db.php');

$sql = "SELECT * FROM player";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>player view</title>
    <style>
        body {
            background-color: whitesmoke;

        }

        .table-responsive {
            max-width: 800px;
            margin: 50px auto;
        }

        table {
            width: 130%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
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
                    <a href="player.php" Style="text-decoration: none"; id="f"  ><i class="fa-solid fa-circle-left"></i> Back</a>
                    <a href="mainpage.php" Style="text-decoration: none"id="h"; ><i class="fa-solid fa-house"></i> Home</a>
    </div>
                    
               
    <div class="table-responsive">
        
        <h1 align="center">Player data</h1><br />
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Player ID</th>
                <th>Player Name</th>
                <th>Phone Number</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Player Role</th>
                <th>Batting Style</th>
                <th>Bowling Type</th>
                <th>Action</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["player_id"] . "</td>";
                echo "<td>" . $row["player_name"] . "</td>";
                echo "<td>" . $row["phone_number"] . "</td>";
                echo "<td>" . $row["DOB"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["player_role"] . "</td>";
                echo "<td>" . $row["batting_style"] . "</td>";
                echo "<td>" . $row["bowling_type"] . "</td>";
                echo "<td>";
                echo "<a href='playerdelete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
                echo "<a href='playerupdate.php?id=" . $row['id'] . "' class='btn btn-danger'>Update</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <br />
    
</body>
</html>

<?php
mysqli_close($con);
?>
