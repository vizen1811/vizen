<?php
function armstrongCheck($n){
    $sum = 0; 
    $x = $n; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    // if true then armstrong number
    if ($n == $sum)
        return 1;
     
    // not an armstrong number   
    return 0;   
}
 
// Driver Code
$n = 407;
$result = armstrongCheck($n);
if ($result == 1)
    echo "Yes".' '.$n.' '."is an armstrong number";
else
    echo "No".' '.$n.' '."is not an armstrong number"
?>