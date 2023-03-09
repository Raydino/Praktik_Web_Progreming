<form method="GET">
  Nama : <input type="text" name="nama" value="" size="30"/><br/>
  Mata Kuliah :
    <select name="matkul">
        <option value="DDP">Dasar Dasar Pemograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemograman Web</option>
    </select><br/>
Nilai UTS :<input type="text" name="nilai_uts" value="" size="6"/><br>
Nilai UAS :<input type="text" name="nilai_uas" value="" size="6"/><br>
Nilai Tugas/Pratikum :<input type="text" name="nilai_tugas" value="" size="6"/><br>
        <button name="proses">Simpan</button>
      
</form>

<?php
error_reporting(0);
$proses = $_POST ["proses"];
$nama_siswa = $_POST ["nama"];
$mata_kuliah = $_POST["matkul"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];

if(!empty($proses)) {
?>

<?= $proses ?>
Nama Siswa <?= $nama_siswa ?>
<br>MataKuliah <?= $mata_kuliah ?>
<br>nilai UTS <?= $nilai_uts ?>
<br>nilai UAS <?= $nilai_uas ?>
<br>nilai tugas <?= $nilai_tugas ?>

<?php } ?>
</body>
</html>