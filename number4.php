<!-- Profit Loss problem -->
<!-- Problem Number 4 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p>  Write a program to calculate profit or loss..<br> Sample Input cost:  1000<br>Sample Input selling:  1500<br>
Sample profit:  500
</p><br><br>




<form method="post">  
Input Cost Price: <input type="text" name="costPrice"><br>
Input Selling Price:  <input type="text" name="sellingPrice"> 
<input type="submit" name="submit" value="Submit">  <br>
</form> 
<?php   
 
    if($_POST)  
    {     


        $costPrice = $_POST['costPrice'];
        $sellingPrice = $_POST['sellingPrice'];
        if(!is_numeric($costPrice) && !is_numeric($sellingPrice))  
        {  
            echo "Input should be  number";  
            return;  
        }

        //conditions to check whether it is profit or loss
        if($costPrice > $sellingPrice){

            $loss = ($costPrice - $sellingPrice);
            echo "Input Cost Price : ".$costPrice."<br>";
            echo "Input Selling Price : ".$sellingPrice."<br>";
            echo "Loss : $loss"."<br>";
            

        }
        else if($costPrice < $sellingPrice){

            $profit = ($sellingPrice - $costPrice);
            echo "Input Cost Price : ".$costPrice."<br>";
            echo "Input Selling Price : ".$sellingPrice."<br>";
            echo "Profit : ".$profit."<br>";
            

        }
        else{
            echo " You have no loss or Profit";
        }
        
 
    }   
?>  

    
</body>
</html> 
