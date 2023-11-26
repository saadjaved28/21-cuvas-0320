<?php

include('db.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
$select_query = "SELECT * FROM team WHERE id = $id";
    $result = mysqli_query($con, $select_query);
    $row = mysqli_fetch_array($result);
 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
     
        $team_name = $_POST['tname'];
        $player_id = $_POST['pid'];
        $captain = $_POST['captan'];

        $update_query = "UPDATE team SET 
                         tname = '$team_name', 
                         pid = '$player_id', 
                         captan = '$captain' 
                         WHERE id = '$id'";
        $update_result = mysqli_query($con, $update_query);
        if ($update_result) {
            echo "Record with ID $id has been updated successfully.";
            header("Location: teamv.php"); 
            exit();
        }
         else {
            echo "Error updating record: " . mysqli_error($con);
            header("Location: scorev.php"); 
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Cricket Team</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   
</head>

<body>
    <a href="team.php" style="text-decoration: none;">Back</a>
    <a href="mainpage.php" style="text-decoration: none;"><i class="fa-solid fa-house"></i>Home</a>

    <div class="container mt-4">
        <h3 class="text-center">Update Cricket Team</h3>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th></th>
                    <th>Team Name</th>
                    <th>Player ID</th>
                    <th>Captain</th>
                    <th>Action</th>
                </tr>

                
                        <form method="POST" action="">
                        <td>   <input type="hidden" name="id" placeholder="id" value="<?php echo $row['id']; ?>"></td>
                        <td>  <input type="text" name="tname" placeholder="team name"value="<?php echo $row['tname']; ?>"></td>
                        <td>  <input type="text" name="pid" placeholder="player id" value="<?php echo $row['pid']; ?>"></td>
                        <td>  <input type="text" name="captan" placeholder="captan" value="<?php echo $row['captan']; ?>"></td>
                        <td>  <button type="submit" class="btn btn-warning" name="update">Update</button>
                        </form>
                   
            </table>
        </div>
    </div>
</body>

</html>
