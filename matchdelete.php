<?php
include('db.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $match_id = $_GET['id'];

    // Perform the delete query
    $delete_query = "DELETE FROM `match` WHERE match_id = $match_id";
    $delete_result = mysqli_query($con, $delete_query);

    if ($delete_result) {
        echo "Record with Match ID $match_id has been deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "Invalid or missing Match ID.";
}

// Close the database connection
mysqli_close($con);
?>
