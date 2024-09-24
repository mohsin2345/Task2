<?php
echo '<div style="text-align: center;">'; 

for ($i = 1; $i <= 9; $i++) {
    for ($m = 1; $m <= $i; $m++) {
        echo $i . " ";
    }
    echo "<br>"; 
}

echo '</div>'; 

echo '<div style="text-align: center;">'; 

for ($i = 9; $i >= 1; $i--) {
    for ($m = 1; $m <= $i; $m++) {
        echo $i . " ";
    }
    echo "<br>"; 
}

echo '</div>'; 
?>


