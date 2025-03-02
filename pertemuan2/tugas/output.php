<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Data yang Dikirim</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $matkul = $_POST['matkul'];
            $uts = $_POST['uts'];
            $uas = $_POST['uas'];
            $nilai = $_POST['nilai'];

            // Perhitungan Nilai Akhir
            $nilai_akhir = ($uts * 0.4) + ($uas * 0.4) + ($nilai * 0.2);

            // Menentukan Grade dan Predikat
            if ($nilai_akhir < 0 || $nilai_akhir > 100) {
                $grade = "I";
                $predikat = "Tidak Ada";
            } elseif ($nilai_akhir >= 85) {
                $grade = "A";
                $predikat = "Mumtaz";
            } elseif ($nilai_akhir >= 70) {
                $grade = "B";
                $predikat = "Jayyid Jiddan";
            } elseif ($nilai_akhir >= 56) {
                $grade = "C";
                $predikat = "Jayyid";
            } elseif ($nilai_akhir >= 36) {
                $grade = "D";
                $predikat = "Maqbul";
            } else {
                $grade = "E";
                $predikat = "Rasib";
            }

            echo "
                    <p><strong>Nama:</strong> $nama</p>
                    <p><strong>Mata Kuliah:</strong> $matkul</p>
                    <p><strong>Nilai Akhir:</strong> " . number_format($nilai_akhir, 2) . "</p>
                    <p><strong>Grade:</strong> $grade</p>
                    <p><strong>Predikat:</strong> $predikat</p>";
        } else {
            echo "<p class='alert alert-danger'>Data tidak ditemukan!</p>";
        }
        ?>
    </div>
</body>
</html>