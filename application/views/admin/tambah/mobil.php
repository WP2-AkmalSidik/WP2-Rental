<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?= $title; ?></title>
   <link rel="stylesheet" href="<?= base_url('rombax/css/admin-edit.css'); ?>">
</head>

<body>

<br>

<form style="height:unset;" action="<?= base_url('admin/addMobil'); ?>" method="POST" enctype="multipart/form-data">
      <h2><strong style="color: <?= $color->value; ?>;">Mobil baru</strong></h2>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Nama</strong></p>
         <input autocomplete="off" type="text" name="nama_mobil">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Harga</strong></p>
         <input autocomplete="off" type="number" name="harga_mobil">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Warna</strong></p>
         <input autocomplete="off" type="text" name="warna_mobil">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Pajak</strong></p>
         <input autocomplete="off" type="text" name="pajak">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Tahun</strong></p>
         <input autocomplete="off" type="text" name="tahun">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Nopol</strong></p>
         <input autocomplete="off" type="text" name="nopol">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Kapasitas</strong></p>
         <input autocomplete="off" type="text" name="kapasitas">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Status</strong></p>
         <select style="color: <?= $color->value; ?>;" name="status_mobil" id="status_mobil">
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak tersedia">Tidak tersedia</option>
         </select>
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Foto mobil</strong></p>
         <input type="file" id="foto_mobil" name="foto_mobil">
      </div>
      <div style="display:flex;align-items:center;justify-content:center;width:100%;">
         <button style="background: <?= $color->value; ?>;" type="submit">Kirim</button>
         <a style="font-weight: bold; color: <?= $color->value; ?>;" href="<?= base_url('admin/mobil'); ?>">Batal</a>
      </div>
   </form>
   
</body>

</html>