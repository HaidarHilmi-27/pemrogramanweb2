<!DOCTYPE html>
<html lang="en">
<head>
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Selamat Belajar PHP</h1>
    <?php
        $_nama = "Haidar Hilmi";
        $_umur = 19;
        $_prodi = "Teknik Informatika";
        $_ipk = 3.64;
    ?>

    <p>Nama : <?php echo $_nama; ?></p>
    <p>Umur : <?=$_umur?></p>
    <p>Prodi : <?=$_prodi?></p>
    <p>IPK : <?=$_ipk?></p>
    <hr>
    <?php
        echo "Apa Kabar $_nama ?";
    ?>
    <hr>
    <h2>Kalkulator</h2>
    <form action="" method="post">
        <label for="">Angka 1 :</label>
        <input type="number" name="angka1">
        <br>
        <label for="">Angka 2 : </label>
        <input type="number" name="angka2">
        <br>
        <label for="">Operasi : </label>
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form>
    <?php
        if (isset($_POST['hitung'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operasi = $_POST['operasi'];
            $hasil = 0;
    
            switch ($operasi) {
                case 'tambah':
                    $hasil = $angka1 + $angka2;
                    break;
                case 'kurang':
                    $hasil = $angka1 - $angka2;
                    break;
                case 'kali':
                    $hasil = $angka1 * $angka2;
                    break;
                case 'bagi':
                    if ($angka2!= 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        echo "Error: Division by zero";
                    }
                    break;
                default:
                    echo "Error: Invalid operation";
                    break;
            }
            echo "<h3> Hasil : $hasil </h3>";

            // define('PHI', 3.14);

            // $jari = 8;
            // $luas = PHI * $jari * $jari;
            // $kll = 
        }
    ?>
    <hr>
    <?php
        $_a = 14;
        $_b = 19;
        $_c = $_a * $_b;
    ?>
    <p>Hasil dari <?=$_a?> x <?=$_b?> : <?=$_c?></p>
</body>
</html>