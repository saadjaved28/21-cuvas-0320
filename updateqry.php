<?php

include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $match_id = $_POST['match_id'];
        $team_id = $_POST['team_id'];
        $score = $_POST['score'];
        $result = $_POST['result'];

        
        $sql = "UPDATE score SET match_id = '$match_id', team_id = '$team_id', score = '$score', result = '$result' WHERE id = $id";

        if (mysqli_query($con, $sql)) {
            
            header("Location: scorev.php"); 
            exit();
        } else {
            
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Invalid request. No ID specified for updating.";
    }
} else {
    echo "Invalid request method. Only POST requests are allowed for updating records.";
}
?>
