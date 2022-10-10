<pre>
<?php
function armstrgnum($MyNum, $Order) {
  $y = $MyNum;
  $sum = 0;

  while ($y > 0){
    $x = $y % 10;
    $sum = $sum + Pow($x, $Order);
    $y = (int)($y/10);
  }

  if ($MyNum == $sum){
    echo $MyNum." is a Armstrong Number.\n";
  } else {
    echo $MyNum." is not a Armstrong Number.\n";
  }
}

armstrgnum(59, 3); 
armstrgnum(2610, 4); 
armstrgnum(3711, 4);
armstrgnum(4812,4);
?>