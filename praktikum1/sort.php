<?php
$ar_buah = ["m"=>"melon", "p"=>"pisang", "pe"=>"pepaya", "a"=>"anggur"];

        echo '<ol>';
        sort($ar_buah);
        echo '</hr>';
        echo '</ol>';
        foreach($ar_buah as $key => $value) {
            echo '<li>' .$key. '-' .$value. '</li>';
        }
        echo '<ol>';
?>