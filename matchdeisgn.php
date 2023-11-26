<?php
// Include your database connection file (e.g., db.php)
include('db.php');

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the record to edit
    $sql = "SELECT * FROM `match` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
} else {
    // 'id' parameter is not set in the URL
    echo "Invalid request. No ID specified for editing.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Edit Match</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Match</h2>
        <form method="POST" action="matchupdate.php?id=<?php echo $row['id']; ?>">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="form-group">
                <label for="match_id">Match ID:</label>
                <input type="text" class="form-control" name="match_id" value="<?php echo $row['match_id'];?>">
            </div>

            <div class="form-group">
                <label for="team_id_1">Team 1:</label>
                <input type="text" class="form-control" name="team_id_1" value="<?php echo $row['team_id_1'];?>">
            </div>

            <div class="form-group">
                <label for="team_id_2">Team 2:</label>
                <input type="text" class="form-control" name="team_id_2" value="<?php echo $row['team_id_2'];?>">
            </div>

            <div class="form-group">
                <label for="date_of_match">Date of Match:</label>
                <input type="text" class="form-control" name="date_of_match" value="<?php echo $row['date_of_match'];?>">
            </div>

            <div class="form-group">
                <label for="stadium">Stadium:</label>
                <input type="text" class="form-control" name="stadium" value="<?php echo $row['stadium'];?>">
            </div>

            <button type="submit" class="btn btn-primary" name="upd">Update</button>
        </form>
    </div>


</body>

</html>

