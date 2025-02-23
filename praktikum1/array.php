<?php
$_ar_buah = ["melon", "pisang", "pepaya", "anggur"];

echo "buah ke 2 adalah $_ar_buah[1]";

echo "<br> Jumlah Array : ". count($_ar_buah);

echo '<br> seluruh buah <ol>';
    foreach($_ar_buah as $_buah) {
        echo '<li>' .$_buah. '</li>';
    }
$_ar_buah[] = "Nanas";

unset($_ar_buah[1]);

$_ar_buah[3]= "Rambutan";

echo '<ul>';
    foreach($_ar_buah as $ak => $av) {
        echo '<li> inden : '.$ak. '- Nama Buah : '.$av. '</li>';
    }

echo '</ul>'
?>
