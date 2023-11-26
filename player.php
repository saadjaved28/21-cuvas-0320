<html>
    <head>
        <title>Player</title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="v.css">
    </head>
    <body >
        
        <div class="container-fluid">
            <div class="row">
                
             
                <h1>Add player data</h1>
                <form method="post" action="">
                <div>
                   
                    <input type="text" class="form-control" name="player_id" placeholder="player id">
                </div><br>
                <div>
                   
                    <input type="text" class="form-control" name="player_name" placeholder="playername">
                </div><br>
                <div>
                   
                   <input type="text" class="form-control" name="phone_number" placeholder="phone no">
               </div><br>
               <div>
                  
                   <input type="text" class="form-control" name="DOB" placeholder="Date of birth" >
               </div><br>
               <div>
                   
                   <input type="text" class="form-control" name="email" placeholder="Email">
               </div><br>
               <div>
                  
                   <input type="text" class="form-control" name="player_role" placeholder="Player role"><br>
               </div>
               <div>
                   
                   <input type="text" class="form-control" name="batting_style" placeholder="batting style">
               </div><br>
               <div>
                    
                    <input type="text" class="form-control" name="bowling_type" placeholder="bowlling type">
                </div><br>
                
                <div id=p>
                    <button type="submit" class="btn " name="sub" >save</button>
                    <a href="playerview.php"> view</a>
                    <a href="mainpage.php"> Home</a>
                    
                </div>
            </form>
            </div> 
            </div>

        </div>


        <?php
include('db.php');


if(isset($_POST['sub'])){


$pid = $_POST['player_id'];
$pname = $_POST['player_name'];
$pcname = $_POST['phone_number'];
$gname = $_POST['DOB'];
$pemail = $_POST['email'];
$prole = $_POST['player_role'];
$pbstyle = $_POST['batting_style'];
$pbtype = $_POST['bowling_type'];



$qry= "INSERT INTO player (player_id,player_name,phone_number,DOB,email,player_role,batting_style,bowling_type)VALUES('$pid', '$pname', '$pcname','$gname', '$pemail','$prole', '$pbstyle','$pbtype')";
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
    body{
        
        background-image: url(s.jpg);
        
    }
    h1{
       
        text-align: center;
        color: aqua;
        
    }
   
    .row{
        margin-right: 500px;
       
    }
    .btn{
        background-color: aqua;
      margin-bottom: 5px;
      
       
    }
    #p a{
        background-color: aqua;
        text-decoration: none;
        color: black;
        border-radius: 5px;
        margin-top: 2px;
       
    }
</style>