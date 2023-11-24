<?php
// using for loop for printing * in increment way
for ($i=0; $i<=5; $i++)
   {
	    for($j=0; $j<=$i; $j++)
		{
	      echo ' * ';
	    }
	echo '<br>' ;    
	} 

// using for loop for printing * in decrement way
for($i=5; $i>=1; $i--)
{   
       for($j=1; $j<=$i; $j++)
	   {  
         echo ' * ';   
       }   
    echo '<br>';   
}   

?>