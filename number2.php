<!-- Week Number and Week Days problem -->
<!-- Problem Number 2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p>  Write a program to input week numbers and print week day. <br>Sample Input: Week number: 1 <br>Sample Output:  Sunday

</p><br><br>




<!-- Taking user Input from a form -->
<form method="post">  
Enter Week Numbers: <input type="text" name="weekNumbers">  
<input type="submit" name="submit" value="Submit">  
</form> 




<?php   
 
    if($_POST)  
    {     

        $weekNumbers = $_POST['weekNumbers'];   
        if(!is_numeric($weekNumbers))  
        {  
            echo "Week Numbers are Numeric ! You should give Number!";  
            return;  
        }   
        
        //condition to check week Numbers and week days///

        if((1 <= $weekNumbers) && ($weekNumbers<=7)){
            if($weekNumbers==1){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Sunday";
            }
            else if($weekNumbers==2){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Monday";
            }
            else if($weekNumbers==3){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Tuesday";
            }
            else if($weekNumbers==4){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Wednesday";
            }
            else if($weekNumbers==5){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Thursday";
            }
            else if($weekNumbers==6){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Friday";
            }
            else if($weekNumbers==7){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Saturday";
            }
        }
        else{
            echo "You should give number between 1-7";
        }

    }   
?>  
