<?php

include('db.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];

   
    $select_query = "SELECT * FROM player WHERE id = $id";
    $result = mysqli_query($con, $select_query);
    $row = mysqli_fetch_array($result);

   
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
      
        $player_id = $_POST['player_id'];
        $player_name = $_POST['player_name'];
        $phone_number = $_POST['phone_number'];
        $DOB = $_POST['DOB'];
        $email = $_POST['email'];
        $player_role = $_POST['player_role'];
        $batting_style = $_POST['batting_style'];
        $bowling_type = $_POST['bowling_type'];

        
        $update_query = "UPDATE player SET 
                         player_id = '$player_id', 
                         player_name = '$player_name', 
                         phone_number = '$phone_number', 
                         DOB = '$DOB', 
                         email = '$email', 
                         player_role = '$player_role', 
                         batting_style = '$batting_style', 
                         bowling_type = '$bowling_type' 
                         WHERE id = '$id'";
        $update_result = mysqli_query($con, $update_query);

        if ($update_result) {
            echo "Record with ID $id has been updated successfully.";
            header("Location: playerview.php"); 
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($con);
            header("Location: playerview.php"); 
            exit();
        }
    }
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Cricket Player</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
       
    </style>
</head>

<body >
    <a href="playerview.php" style="text-decoration: none;" id="h"><i class="fa-solid fa-circle-left"></i>Back</a>
    <a href="mainpage.php" style="text-decoration: none;" id="f"><i class="fa-solid fa-house"></i>Home</a>

    <div class="table-responsive">
        <h3 align="center">Update Cricket Player</h3><br />
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

            
               
               
                    <form method="POST" action="">
                      <td>  <input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
                       <td> <input type="text" name="player_id" value="<?php echo $row['player_id']; ?>"></td>
                       <td>  <input type="text" name="player_name" value="<?php echo $row['player_name']; ?>"></td>
                       <td>  <input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>"></td>
                       <td>  <input type="text" name="DOB" value="<?php echo $row['DOB']; ?>"></td>
                       <td>  <input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
                       <td> <input type="text" name="player_role" value="<?php echo $row['player_role']; ?>"></td>
                       <td> <input type="text" name="batting_style" value="<?php echo $row['batting_style']; ?>"></td>
                       <td> <input type="text" name="bowling_type" value="<?php echo $row['bowling_type']; ?>"></td>
                       <td> <button type="submit" class="btn btn-warning" name="update">Update</button></td>
                    </form>
               
            
        </table>
    </div>
    <br />
</body>

</html>


<style>
    body{
        background-color: aqua;
    }
</style>