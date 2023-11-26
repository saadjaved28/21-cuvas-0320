<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stadium</title>
</head>
<body>
<a href="mainpage.php" Style="text-decoration: none";> Home</a>
<div class="signup-form">
        
        <form action="" method="post">
            <h1>Add stadium</h1>
             
            <input type="text" placeholder=" stadium name" class="txt" name="stadium_name">
            <input type="text" placeholder=" stadium location" class="txt" name="stadium_location">
            <input type="text" placeholder=" stadium capicity" class="txt" name="stadium_capacity">
           

            <input type="submit" value="save" class="btn" name="saver">
            <a href="stadiumview.php"> view data</a>
        </form>
    </div>

    <?php






include('db.php');

if(isset($_POST['saver'])){


$tname = $_POST['stadium_name'];
$tid = $_POST['stadium_location'];
$cname = $_POST['stadium_capacity'];




$qry= "INSERT INTO stadium (stadium_name, stadium_location,stadium_capacity )VALUES('$tname', '$tid', '$cname')";
$result = mysqli_query($con, $qry);
if (!$result) {
    echo "SQL query failed: " . mysqli_error($con);
} else {
    echo "Record added successfully.";
}


mysqli_close($con);



}



?>



</body>
    <style>
body
{
    margin: 0px;
    padding: 0px;
    background-color: skyblue;
   
    
}

.signup-form
{
    width: 300px;
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
!