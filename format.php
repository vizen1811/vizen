<?php
function format($n){
    $start=1509;
    echo $start."<br>";
    for ($i=0; $i < $n; $i++) { 
        $num= $start+1101;
        echo $num."<br>";
        $start=$num;
        
    }
   }
   $result=format(3);

?>