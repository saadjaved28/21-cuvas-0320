<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>cricket</title>
</head>
<body>

<div>

                    <a href="mainpage.php" Style="text-decoration: none"id="h"; ><i class="fa-solid fa-house"></i> Home</a>
    </div>
<div class="signup-form">
<h1>Add score data</h1>
        <form action="" method="post">
            <input type="text" placeholder=" Match id" class="txt" name="match_id">
            <input type="text" placeholder=" Team id" class="txt" name="team_id">
            <input type="text" placeholder=" score" class="txt" name="score">
            <input type="text" placeholder=" result" class="txt" name="result">

            <input type="submit" value="save" class="btn" name="save">
            <a href="scorev.php"> view data</a>
        </form>
    </div>
    <?php






    include('db.php');

if(isset($_POST['save'])){


   $tname = $_POST['match_id'];
   $tid = $_POST['team_id'];
   $cname = $_POST['score'];
   $rname = $_POST['result'];



    $qry= "INSERT INTO score (match_id, team_id,score, result)VALUES('$tname', '$tid', '$cname','$rname')";
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
<style>
        #h{
           border: solid ;
            margin-left: 19px;
            font-size: 40px;
            border-radius: 9px;
            color: black;
        }
    body
{
    margin: 0px;
    padding: 0px;
   
   
    
}

.signup-form
{
    width: 300px;
    padding: 20px;
    text-align: center;
 background-color: cyan;
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
    background: white;
    color:black;
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