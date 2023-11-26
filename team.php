<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cricket</title>
</head>
<body>
<a href="mainpage.php" Style="text-decoration: none";> Home</a>
<div class="signup-form">
    <h1>Add Team data</h1>
        
        <form action="" method="post">
            <input type="text" placeholder=" Team Name" class="txt" name="tname" required>
            <input type="text" placeholder=" Team ID" class="txt" name="tID" required>
            <input type="text" placeholder=" captain Name" class="txt" name="cname" required>
           
            <input type="submit" value="save" class="btn" name="save">
            <a href="teamv.php"> view</a>
        </form>
    </div><!--php code-->
    <?php
    include('db.php');

    if(isset($_POST['save'])){

    
       $tname = $_POST['tname'];
       $tid = $_POST['tID'];
       $cname = $_POST['cname'];
        



        $qry= "INSERT INTO team (tname, pid, captan)VALUES('$tname', '$tid', '$cname')";
        $result= mysqli_query($con,$qry);

        if(!$result){
            echo "error:".$qry."<br>".$con->error;
        }
        else
        {
            echo "add";
        }
       
        mysqli_close($con);



    }
    
    

    ?>


</body>
</html>
<!--php code-->
<style>
    body
{
    margin: 0px;
    padding: 0px;
    background-color: cadetblue;
    
}


.signup-form
{
    width: 600px;
    padding: 20px;
    text-align: center;
    background: rgba(101,102,114,0.7);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
 
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