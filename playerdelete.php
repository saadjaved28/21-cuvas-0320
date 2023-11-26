<?php
include('db.php');


if(isset($_GET['id'])){
    $player_id = $_GET['id'];

    $sql = "DELETE FROM player WHERE id='$player_id'";
    $result = mysqli_query($con, $sql);

    if(!$result){
        die("Error deleting record: " . mysqli_error($con));
    } else {
        echo "Record deleted successfully.";


        header("Location: playerview.php"); 
        exit();

    }

}
mysqli_close($con);
?>
