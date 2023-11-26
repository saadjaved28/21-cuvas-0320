<?php

include('db.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM stadium WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
} else {
  
    echo "Invalid request. No ID specified for editing.";
    exit();
}
?>

<!DOCTYPE html>  
<html>  
<head>  
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>  
<body >  
    <br />  
    <div class="container" style="width:500px;">  
        <h3 align="center">Edit Cricket Team Record</h3><br />                 
        <form method="POST" action="stadiumupdate.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="match_id">Match ID:</label>
                <input type="text" class="form-control" name="stadium_name" value="<?php echo $row['stadium_name'];?>">
            </div>
            <div class="form-group">
                <label for="team_id">Team ID:</label>
                <input type="text" class="form-control" name="stadium_location" value="<?php echo $row['stadium_location'];?>">
            </div>
            <div class="form-group">
                <label for="score">Score:</label>
                <input type="text" class="form-control" name="stadium_capacity" value="<?php echo $row['stadium_capacity'];?>">
            </div>
            
            <button type="submit" class="btn btn-primary" name="upd">Update</button>
        </form>
    </div>  
</body>  
</html>
