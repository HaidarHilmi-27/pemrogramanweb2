<?php 
$siswa = ["Tian", "Ahong", "Acong", "Cape"];
echo "array awal : \n";
print_r($siswa);

$orang_terakhir = array_pop($siswa);
echo '<br>';
echo "Elemen yang akan dihapus " .$orang_terakhir. "\n";
echo '<br>';
echo "Array setelah penghapusan : ";
print_r($siswa)
?>