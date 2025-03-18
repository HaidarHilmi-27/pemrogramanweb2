<?php
require_once 'nilai_mahasiswa.php';

session_start();

if (!isset($_SESSION['data_mhs'])) {
    $_SESSION['data_mhs'] = [];
}

// Data awal
if (empty($_SESSION['data_mhs'])) {
    $_SESSION['data_mhs'][] = new NilaiMahasiswa("Hakim", "Basis Data", 30, 25, 15);
    $_SESSION['data_mhs'][] = new NilaiMahasiswa("Saya", "Basis Data 2", 80, 95, 55);
    $_SESSION['data_mhs'][] = new NilaiMahasiswa("Kamu", "Basis Data 3", 100, 100, 19);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $matkul = $_POST['matkul'] ?? '';
    $nilai_uts = $_POST['uts'] ?? 0;
    $nilai_uas = $_POST['uas'] ?? 0;
    $nilai_tugas = $_POST['tugas'] ?? 0;
    
    if (!empty($nama) && !empty($matkul)) {
        $_SESSION['data_mhs'][] = new NilaiMahasiswa($nama, $matkul, $nilai_uts, $nilai_uas, $nilai_tugas);
    }
}
?>

<h3>Input Data Mahasiswa</h3>

<form method="POST">
    <label for="nama">Nama </label>
    <input type="text" name="nama" id="nama" required><br><br>
    <label for="matkul">Mata Kuliah </label>
    <input type="text" name="matkul" id="matkul" required><br><br>
    <label for="uts">Nilai UTS </label>
    <input type="number" name="uts" id="uts" required><br><br>
    <label for="uas">Nilai UAS </label>
    <input type="number" name="uas" id="uas" required><br><br>
    <label for="tugas">Nilai Tugas </label>
    <input type="number" name="tugas" id="tugas" required><br><br>
    <input type="submit" value="Simpan">
</form>

<h3>Daftar Nilai Mahasiswa</h3>

<table border="1" cellpadding="2" cellspacing="2" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Mata Kuliah</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Tugas</th>
            <th>Nilai Akhir</th>
            <th>Kelulusan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($_SESSION['data_mhs'] as $mhs) {
            echo "<tr>";
            echo "<td>" . $nomor . "</td>";
            echo "<td>" . $mhs->nama . "</td>";
            echo "<td>" . $mhs->matakuliah . "</td>";
            echo "<td>" . $mhs->nilai_uts . "</td>";
            echo "<td>" . $mhs->nilai_uas . "</td>";
            echo "<td>" . $mhs->nilai_tugas . "</td>";
            echo "<td>" . $mhs->getNA() . "</td>";
            echo "<td>" . $mhs->Kelulusan() . "</td>";
            echo "</tr>";
            $nomor++;
        }
        ?>
    </tbody>
</table>
