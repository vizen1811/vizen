<?php
$numbers = array(2,4,6,8,12);
$total = 0;
for($i = 0 ; $i < count($numbers); $i++)
{
   $total+= $numbers[$i];
}
echo "The total of the values of the array is :".$total;
?>