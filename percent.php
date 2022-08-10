<?php
if(isset($_GET['submit'])){
    $percentage= ($_GET['PHYSICS']+$_GET['CHEMISTRY']+$_GET['MATHS']+$_GET['BIOLOGY']+$_GET['COMPUTER'])/5;
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>

</head>
<body>
    <form method="GET">
        <label for="physics">physics</label>
        <input class="physics" type="number" name="PHYSICS">
        <label for="chemistry">chemistry</label>
        <input class="chemistry" type="number" name="CHEMISTRY">
        <label for="maths">maths</label>
        <input class="maths" type="number" name="MATHS">
        <label for="biology">biology</label>
        <input class="biology" type="number" name="BIOLOGY">
        <label for="computer">computer</label>
        <input class="computer" type="number" name="COMPUTER">
        <input type="submit" name="submit" id="submit">
    </form>
    <?php
    echo "PERCENTAGE =".$percentage."<br>"; 
    if ($percentage>=80) {
        echo "GRADE A";
    } elseif ($percentage>=70) {
        echo "GRADE B";
    } elseif ($percentage>=60) {
        echo "GRADE C";
    } elseif ($percentage>=50) {
        echo "GRADE D";
    } elseif ($percentage>=35) {
        echo "GRADE E";
    } else {
        echo "FAIL";
    }
    
    ?>
    
</body>
</html>