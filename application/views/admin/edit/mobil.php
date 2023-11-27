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

   <form style="height:unset;" action="<?= base_url('admin/updateMobil'); ?>" method="POST" enctype="multipart/form-data">
      <h2>Ubah data <strong style="color: <?= $color->value; ?>;"><?= $get->nama_mobil; ?></strong></h2>
      <input type="hidden" name="id_mobil" value="<?= $get->id_mobil; ?>">
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Nama mobil</strong></p>
         <input type="text" name="nama_mobil" value="<?= $get->nama_mobil; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Harga mobil</strong></p>
         <input type="text" name="harga_mobil" value="<?= $get->harga_mobil; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Warna mobil</strong></p>
         <input type="text" name="warna_mobil" value="<?= $get->warna_mobil; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Pajak</strong></p>
         <input type="text" name="pajak" value="<?= $get->pajak; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Tahun</strong></p>
         <input type="text" name="tahun" value="<?= $get->tahun; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Nopol</strong></p>
         <input type="text" name="nopol" value="<?= $get->nopol; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Kapasitas</strong></p>
         <input type="text" name="kapasitas" value="<?= $get->kapasitas; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Status</strong></p>
         <select style="color: <?= $color->value; ?>;" name="status_mobil" id="status_mobil">
            <option value="<?= $status_mobil; ?>"><?= $status_mobil; ?></option>
            <option value="<?= $status; ?>"><?= $status; ?></option>
         </select>
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Foto mobil</strong></p>
         <input type="file" id="foto_mobil"name="foto_mobil" value="<?= $get->foto_mobil; ?>">
      </div>
      <div style="display:flex;align-items:center;justify-content:center;width:100%;">
         <button style="background: <?= $color->value; ?>;" type="submit">Ubah</button>
         <a style="font-weight: bold; color: <?= $color->value; ?>;" href="<?= base_url('admin/mobil'); ?>">Batal</a>
      </div>
   </form>

</body>

</html>