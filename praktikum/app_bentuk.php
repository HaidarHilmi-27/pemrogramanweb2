<?php
    require_once 'lingkaran.php';

    $lingkaran1 = new Lingkaran(8.4);
    $lingkaran2 = new Lingkaran(14);

    echo "nilai PHI adalah ". Lingkaran::PHI;
    echo "<br> nilai Jari-Jari lingkaran 1 = ". $lingkaran1->jari;
    echo "<br> nilai Jari-Jari lingkaran 2 = ". $lingkaran2->jari;
    echo "<br> Luas lingkaran 1 = ". $lingkaran1->getLuas();
    echo "<br> Keliling lingkaran 1 = ". $lingkaran1->getKeliling();
    echo "<hr> ";
    $lingkaran1->cetak();
    echo "<br>";

?>