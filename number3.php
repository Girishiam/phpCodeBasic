<!-- Note problem -->
<!-- Problem Number 3 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p>   Write a program to count the total number of notes in a given amount.
.<br> Sample Input:  575<br>Sample output :
500 : 1 <br>
100 : 0 <br>
50 : 1 <br>
20 : 1 <br>
10 : 0 <br>
5 : 1 <br>
2 : 0 <br>
1 : 0 <br>

</p><br><br>



<form method="post">  
Enter Amount: <input type="text" name="amount">  
<input type="submit" name="submit" value="Submit">  
</form> 
<?php   
 
    if($_POST)  
    {     

        $amount = $_POST['amount'];   
        if(!is_numeric($amount))  
        {  
            echo "Input should be a number";  
            return;  
        }   
        
        $amount1 = $amount;
        //array of notes//
        $notesArray = array(500, 100, 50, 20, 10, 5, 2, 1);
        $noteCounterArray =array(0, 0, 0, 0, 0, 0, 0, 0,0);

        //condition to check the notes 
        for ($i = 0; $i < 8; $i++){         // Count notes
            if ($amount >= $notesArray[$i]){
                    
                        $noteCounterArray[$i] = intval($amount / $notesArray[$i]);
                        $amount = $amount - $noteCounterArray[$i] * $notesArray[$i];
                    }
                }
                echo "Sample Input : ".$amount1."<br>"; // Printing given amount

                echo ("Total Number of Notes :"."<br>"); // Printing  notes With  Notes counter

                for ($i = 0; $i < 8; $i++)
                {

                    echo ($notesArray[$i] . " : " .$noteCounterArray[$i]."<br>" );

                }
                return 0;

    }   
?>  

    
</body>
</html> 
