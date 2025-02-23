<?php 
//Array push
$komponen = ["Mobo", "Processor", "RAM", "CPU"];
print_r($komponen);
//menambahkan elemen
array_push($komponen, "PSU", "Cassing");
echo '<br>';
echo "setelah Push :";
print_r($komponen);
?>