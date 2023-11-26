<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="matchstylesheet.css">
    <title>Cricket</title>
</head>
<body>
    
<div>
                   
                    <a href="mainpage.php" Style="text-decoration: none"id="h"; ><i class="fa-solid fa-house"></i> Home</a>
    </div>
<div class="signup-form">

    <h1>Add Match</h1>
    <form method="post" action=""> <!-- Specify the action URL -->
        <input type="text" placeholder="Match id" class="txt" name="match_id">
        <input type="text" placeholder="Team id 1" class="txt" name="team_id_1">
        <input type="text" placeholder="Team id 2" class="txt" name="team_id_2">
        <input type="text" placeholder="Date of Match" class="txt" name="date_of_match">
        <input type="text" placeholder="Stadium name" class="txt" name="stadium">
        <button type="submit" class="btn" name="btnsave">SAVE</button>
        <a href="matchview.php">view</a>
    </form>
</div>

<?php
include('db.php');

if(isset($_POST['btnsave'])){
    $pida = $_POST['match_id'];
    $pnameb = $_POST['team_id_1'];
    $pcnamec = $_POST['team_id_2'];
    $gnamed = $_POST['date_of_match'];
    $pemaile = $_POST['stadium'];

    $qry = "INSERT INTO `match` (match_id, team_id_1, team_id_2, date_of_match, stadium) VALUES ('$pida', '$pnameb', '$pcnamec', '$gnamed', '$pemaile')";
    $result = mysqli_query($con, $qry);

    if(!$result){
        echo "Error: " . $qry . "<br>" . $con->error;
    } else {
        echo " successfully.";
    }

    mysqli_close($con);
}
?>
</body>
</html>
<style>
   
    body
{
    margin: 0px;
    padding: 0px;
    background: url(d.jpg.jpg) no-repeat;
    background-size: cover;
   
    
}

.signup-form
{
    width: 700px;
    padding: 20px;
    text-align: center;
    background: rgba(101,102,114,0.7);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    overflow: hidden;
    border-radius: 05px;
}

.signup-form img
{
    width: 50%;
    height: 50%;
}


.signup-form input
{
    display: block;
    width: 100%;
    padding-left: 10px;
    height: 44px;
    box-sizing: border-box;
    outline: none;
    border: none;
    font-family: 'Ubuntu', sans-serif;
    font-size: 14px;
}

.txt
{
    margin: 20px 0px;
    border-radius: 05px;
}

.btn
{
    margin-top: 60px;
    margin-bottom: 20px;
    background: #487eb0;
    color:#fff;
    border-radius: 40px;
    cursor: pointer;
    transition: 0.8s;
}

.btn:hover
{
    transform: scale(0.96);
}


.signup-form a
{
    text-decoration: none;
    color:#000;
    font-family: 'Ubuntu', sans-serif;
    padding: 10px;
    transition: 0.8s;
    display: block;
}

.signup-form a:hover
{
    background:rgba(0,0,0,0.3);
    color:#fff;
}
</style>
</style>
