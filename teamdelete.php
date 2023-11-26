<?php
include('db.php');
include('teamv.php');

if(isset($_GET['id'])){
    $stadium_id = $_GET['id'];

    $sql = "DELETE FROM team WHERE id='$stadium_id'";
    $result = mysqli_query($con, $sql);

    if(!$result){
        die("Error deleting record: " . mysqli_error($con));
    } else {
        echo "Record deleted successfully.";
    }

    mysqli_close($con);
} else {
    echo "Invalid request. Please provide a stadium ID.";
}
?>
