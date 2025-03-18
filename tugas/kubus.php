<?php

//Class Kubus
class Kubus{
    public $sisi;

    /** Constructor kubus */
    function __construct($sisi){
        $this->sisi = $sisi;
    }

    /** Method untuk menghitung luas permukaan */
    function getLuasPermukaan(){
        return 6 * pow($this->sisi, 2);
    }

    /** Method untuk menghitung volume */
    function getVolume(){
        return pow($this->sisi, 3);
    }

    /** Method untuk menghitung keliling */
    function getKeliling(){
        return 12 * $this->sisi;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Kubus</title>
</head>
<body>
    <div class="section">
        <h2>Contoh Penggunaan Kubus</h2>

        <?php
        $kubus = new Kubus(5);

        echo "Sisi : ". $kubus->sisi. "<br>";
        echo "<hr>";
        echo "Luas Permukaan : ". $kubus->getLuasPermukaan(). "<br>";
        echo "Volume : ". $kubus->getVolume(). "<br>";
        echo "Keliling : ". $kubus->getKeliling(). "<br>";
        ?>
    </div>
</body>
</html>
