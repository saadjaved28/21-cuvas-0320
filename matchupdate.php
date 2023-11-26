<?php
include('db.php');
include('matchdeisgn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upd'])) {
    // Get values from the form
    $id = $_POST['id'];
    $match_id = $_POST['match_id'];
    $team_id_1 = $_POST['team_id_1'];
    $team_id_2 = $_POST['team_id_2'];
    $date_of_match = $_POST['date_of_match'];
    $stadium = $_POST['stadium'];

    // Perform the update query
    $update_query = "UPDATE `match` SET 
                    match_id = '$match_id', 
                    team_id_1 = '$team_id_1', 
                    team_id_2 = '$team_id_2', 
                    date_of_match = '$date_of_match', 
                    stadium = '$stadium'
                    WHERE id = '$id'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        echo "Record with ID $id has been updated successfully.";
        header("Location: matchview.php"); 
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

    <a href="matchview.php" Style="text-decoration: none"; style="margin-left: 8px";><i class="fa-solid fa-circle-left"> Back</a>
</div>
</body>
</html>