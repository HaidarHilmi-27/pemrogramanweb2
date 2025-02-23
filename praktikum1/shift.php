<?php 
$rokok = ["Samsu", "esse", "Garpit", "Kretek"];

//hapus elemen pertama
$awal = array_shift($rokok);

echo "rokok yang dihapus : $awal <br>";
echo "setelah shift <br>";
foreach ($rokok as $r) {
    echo "$r <br>";
}

?>