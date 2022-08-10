<?php
$array = array(1, 2, 2, 3, 3);
echo "input array is :";
foreach($array as $value){
    echo $value;
}
echo "<br/>";
$array = array_unique($array);
echo "array without duplicate values is :";
foreach($array as $value){
    echo $value;
}
?>