<?php  
$num=18;  
if($num<100){  
echo "$num is less than 100";  
}  
?>  


2
<?php  
$num=12;  
if($num%2==0){  
echo "$num is even number";  
}else{  
echo "$num is odd number";  
}  
?>  

3
<?php  
    $marks=90;      
    if ($marks<33){    
        echo "fail";    
    }    
    else if ($marks>=34 && $marks<50) {    
        echo "D grade";    
    }    
    else if ($marks>=50 && $marks<65) {    
       echo "C grade";   
    }    
    else if ($marks>=65 && $marks<80) {    
        echo "B grade";   
    }    
    else if ($marks>=80 && $marks<90) {    
        echo "A grade";    
    }  
    else if ($marks>=90 && $marks<100) {    
        echo "A+ grade";   
    }  
   else {    
        echo "Invalid input";    
    }    
?>  

//4
<?php  
               $age = 23;  
    $nationality = "pk";  
    //applying conditions on nationality and age  
    if ($nationality == "pk")  
    {  
        if ($age >= 22) {  
            echo "Eligible to give vote";  
        }  
        else {    
            echo "Not eligible to give vote";  
        }  
    }  
?>  

//5
<?php  
              $a = 134; $b = 256; $c = 145;  
    if ($a < $b) {  
        if ($a < $c) {  
            echo "$a is smaller than $b and $c";  
        }  
    }  
?>