<?php
$laptop = ["Asus", "Lenovo", "HP"];

array_unshift($laptop, "Realme", "Dell");

echo "Hasil";
foreach ($laptop as $p) {
    echo "<br>" .$p;
}
?>