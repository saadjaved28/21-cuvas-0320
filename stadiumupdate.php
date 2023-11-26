<?php

include('db.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $select_query = "SELECT * FROM stadium WHERE id = $id";
    $result = mysqli_query($con, $select_query);
    $row = mysqli_fetch_array($result);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
     
        $stadium_name = $_POST['stadium_name'];
        $stadium_location = $_POST['stadium_location'];
        $stadium_capacity = $_POST['stadium_capacity'];

        $update_query = "UPDATE stadium SET 
                         stadium_name = '$stadium_name', 
                         stadium_location = '$stadium_location', 
                         stadium_capacity = '$stadium_capacity' 
                         WHERE id = '$id'";
        $update_result = mysqli_query($con, $update_query);

        if ($update_result) {
            echo "Record with ID $id has been updated successfully.";
            header("Location: stadiumview.php"); 
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
    }
} else {
    
    echo "Invalid request. No ID specified for updating.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Cricket Stadium</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <a href="stadiumview.php" style="text-decoration: none;">Back</a>
    <a href="mainpage.php" style="text-decoration: none;">Home</a>

    <div class="container mt-4">
        <h3 class="text-center">Update Cricket Stadium</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="stadium_name">Stadium Name:</label>
                <input type="text" class="form-control" name="stadium_name" value="<?php echo $row['stadium_name']; ?>">
            </div>
            <div class="form-group">
                <label for="stadium_location">Stadium Location:</label>
                <input type="text" class="form-control" name="stadium_location" value="<?php echo $row['stadium_location']; ?>">
            </div>
            <div class="form-group">
                <label for="stadium_capacity">Stadium Capacity:</label>
                <input type="text" class="form-control" name="stadium_capacity" value="<?php echo $row['stadium_capacity']; ?>">
            </div>
            <button type="submit" class="btn btn-warning" name="update">Update</button>
        </form>
    </div>

</body>

</html>
