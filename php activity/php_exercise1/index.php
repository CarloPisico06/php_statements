<?php  
	$start  = 1;
	$end = 10;
?>

<!DOCTYPE html>  
<html>  
    <title><?php echo $page_title.' '.$value2 ?></title>

	<h1>PHP statement exercise 1</h1>

				<?php  
			$word='kodego';  
			if($word>'class'){  
			echo "$word  word has 6 characters";  
			}else{  
			echo "$word class word is less than 6 characters"; 
			echo "$word top word is less than 6 characters";  
			}  
			?>

	<h1>PHP statement exercise 2</h1>	
<?php
        function better_deal($quantity1, $quantity2, $price1, $price2)

                {
                        $deal1 = $price1 / $quantity1;
                        $deal2 = $price2 / $quantity2;
                        return($deal1 < $deal2);
                }

                $quantity1 = 70;
                $quantity2 = 100;
                $price1 = 1035;
                $price2 = 1200;

                if(better_deal($quantity1, $quantity2, $price1, $price2))
                 {

                    print("The first deal is best!");
                }
                else
                {
                    print("The second deal is best!");
                }
?>
<body>

<h1>PHP statement exercise 4</h1>	
				<?php  
    //declare array  
    $students = array (  
        "name" => "John Garg",  
        "age" => 21,  
        "school" => "Ahlcon Public school",   
        
    );  
      
    //display associative array element through foreach loop  
	foreach ($students as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>"; 
		  
    }  
	    echo "</br>"; 
	$students = array (  
        "name" => "Smith Soy",  
        "age" => 16,  
        "school" => "St. Marie school",   
        
    );  
      
    //display associative array element through foreach loop  
	foreach ($students as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>"; 
		
		  
    }  
		
	echo "</br>"; 
	$students = array (  
        "name" => "Charle Rena",  
        "age" => 16,  
        "school" => "ST. Columba school",   
        
    );  
      
    //display associative array element through foreach loop  
	foreach ($students as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>"; 
		  
    }  

?> 

	<h1>PHP statement exercise 5</h1>	
	<table border="1">
	<?php
		print("<tr>");
		print("<th></th>");
		for($count = $start; $count <= $end; $count++) 
		print("<th>".$count."</th>");
		print("</tr>");
		
		for($count = $start; $count <= $end; $count++) 
		{
		  print("<tr><th>".$count."</th>");
		  for($count2 = $start; $count2 <= $end; $count2++) 
		  {
			$result = $count / $count2; 
			printf("<td>%.3f</td>", $result);
		  }
		  print("</tr> \n");
		}	
	?>
	</table>

	
</body>

</html>

