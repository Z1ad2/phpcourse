<?php
echo "<br>";echo "<br>";
echo "<h3>Loops</h3>";
 for ( $i = 0; $i <= 5 ; $i++){
echo $i ."+". 10 ." = ". $i + 10;
echo "<br>";
}
$family = ["Father","Mother","Son"];

    for($i = 0; $i < count($family);$i++){
        echo $family[$i] . "<br>";
    }
    
