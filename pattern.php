<?php
$n=5;
for ($i=0;$i<$n;$i++){
    for ($j=0; $j < $n; $j++) { 
        if($j==0){
        echo "*";
        }else{
            if($i==0 || $i==4){
                echo "*";
            }else{
            echo "&nbsp;";
            }
        }
    }
    echo "<br/>";
    }       
?>