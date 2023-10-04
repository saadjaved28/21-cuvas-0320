<form >

 <div class="reg">
    
           <form  method="Get">
            <label for=""><h1>REGISTRATION FORM</h1></label>
            <label class="lab" >Name</label>   
            <input type="text" placeholder=" User Name"  name="UserName" class="txt">

            <label class="lab">Father </label>
            <input type="text" placeholder=" Father Name"  name="fname"class="txt" >

            <label class="lab">Email</label>
            <input type="email" placeholder=" Email"  name="email" class="txt">

            <label class="lab">CNIC</label>
            <input type="Cnic" placeholder=" CNIC"  name="Cnic"class="txt">

            <input type="submit" value="submit"  name="save"class="btn">
      </form>
      </div>

<style>
body
{
    margin: 0px;
    padding: 0px;
    background-size: cover;
    background-color: skyblue; 
}
form{
    padding-left: 500px;
}

.reg
{
    width: 300px;
    padding: 20px;
    color: black;
    background-color: aqua;
    border-radius: 05px;
    border: 5px solid black ;
}
.reg input
{
  display: block;
    width: 100%;
    padding-left: 10px;
    height: 44px;
    font-family: UserName;
    font-size: 14px;
}

.txt
{
    margin: 20px 0px;
    border-radius: 100px;
}
.btn
{
    margin-top: 60px;
    margin-bottom: 20px;
    background: red;
    color:white;
    border-radius: 40px;
    cursor: pointer;
   
    box-shadow: 0 0 5px rgb(255, 0, 43),
    0 0 25px rgb(255, 0, 13);
    border: 3px dotted;
}

.btn:hover
{ box-shadow: 0 0 5px rgb(110, 8, 226),
    0 0 25px rgb(88, 6, 240),0 0 50px rgba(88, 5, 241, 0.938) ,
    0 0 100px rgb(66, 7, 228),0 0 00px rgba(52, 7, 216, 0.897);
    
}
.tb2{
    width: 350px;
    padding: 20px;
    margin-left: 500px;
     text-align: center;
    background-color: aqua;
    border-radius: 05px;
    
    }
</style>

</form>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
<table border="5px" class="tb2">

<?php
if(isset($_GET['save'])){

$name=$_GET['UserName'];
$fname=$_GET['fname'];
$email=$_GET['email'];
$cnic=$_GET['Cnic'];

echo "<tr><th>UserName</th><td> $name </td></tr>";
echo "<tr><th>fname</th><td> $fname </td></tr>";
echo "<tr><th>email</th><td> $email </td></tr>";
echo "<tr><th>Cnic</th><td> $cnic </td></tr>";
}

?>
</table>