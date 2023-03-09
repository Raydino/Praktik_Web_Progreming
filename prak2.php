<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Belanja Online</span>
  </div>
  </nav>
  <form method="POST">
  Costomer : <input type="text" name="Costomer" value="" size="30"/><br/>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Pilih Produk</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          TV
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Kulkas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Mesin Cuci
        </label>
      </div>
    </div>
  </fieldset>
  
  Jumlah :<input type="text" name="Jumlah" value="" size="30"/><br>
<button name="proses">Simpan</button>
</form>

<?php 
$nama = $_POST ["Costomen"];
$nilai = $_POST ["Pilih Produk"];
$tombol = $_POST ["keterangan"];

$ket =($nilai >= 55)? "lulus":"gagal";

if ($nilai>= 85 && $nilai <= 100) $grade = "A" ;
else if ($nilai >= 70 && $nilai <= 84) $grade = "B" ;
else if ($nilai >= 56 && $nilai <= 69) $grade = "C" ;
else if ($nilai >= 36 && $nilai <= 55) $grade = "D" ;
else if ($nilai >= 0 && $nilai <= 35) $grade = "D" ;
else $grade = "";

switch ($grade) {
    case "A": $predikat = "Sangat Baik"; break;
    case "B": $predikat = "Baik"; break;
    case "C": $predikat = "Cukup"; break;
    case "D": $predikat = "Kurang Baik"; break;
    case "E": $predikat = "Tidak Baik"; break;

    default: $predikat = "";
}
if(isset($tombol)) ?>

<?= $nama ?>

<br><?= $nilai ?>
<br><?= $ket ?>
<br><?= $grade ?>

<?php 

?>
<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    Daftar Harga
  </button>
  <button type="button" class="list-group-item list-group-item-action">TV : 4.200.000</button>
  <button type="button" class="list-group-item list-group-item-action">Kulkas : 3.100.000</button>
  <button type="button" class="list-group-item list-group-item-action">Mesin Cuci : 3.800.000</button>
</div>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>