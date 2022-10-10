<?php 
for ($i=0; $i<5; $i++) { 
    for ($j=0; $j<=5; $j++) { 
        if ($j == 1 or (($i == 0 or $i == 4) and ($j > 1 and $j < 6)) or ($j>1 and $j<2)) 
        echo "*";  
       } 
       
        echo "<br>"; }
         ?>