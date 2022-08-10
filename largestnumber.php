<?php
$n1=50; $n2=30; $n3=20;
$max = ($n1>$n2)?($n1>$n3?$n1:$n3): ($n2>$n3?$n2:$n3);
echo "Largest number of the three is :".$max;
?>