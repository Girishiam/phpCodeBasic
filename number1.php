<!-- leap year problem -->
<!-- Problem Number 1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<p>  Write a program to check whether a year is a leap year or not. <br>Sample Input: 2004 <br>Sample Output:  Leep Year

</p><br><br>




<form method="post">  
Year: <input type="text" name="year">  
<input type="submit" name="submit" value="Submit">  
</form> 




<?php   
 
    if($_POST)  
    {     

        $year = $_POST['year'];   
        if(!is_numeric($year))  
        {  
            echo "Input should be a number";  
            return;  
        }   
        //condition to check if it is leap year or not
        if( ($year%4 == 0) and ($year%100 != 0) or ($year%400 ==0))  
        {  
            echo "Sample Input : $year"."<br>";
            echo "Sample Output : Leap Year";    
        }  
        else  
        {  
            echo "Sample Input : $year"."<br>";
            echo "Sample Output : Not Leap Year";    
        }  
    }   
?>  

    
</body>
</html> 
