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

<form style="height:unset;" action="<?= base_url('admin/addDriver'); ?>" method="POST" enctype="multipart/form-data">
      <h2><strong style="color: <?= $color->value; ?>;">Driver baru</strong></h2>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Nama</strong></p>
         <input autocomplete="off" type="text" name="nama_driver">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Alamat</strong></p>
         <input autocomplete="off" type="text" name="alamat_driver">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">No Telp</strong></p>
         <input autocomplete="off" type="text" name="tlp_driver">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Status</strong></p>
         <input autocomplete="off" type="text" name="status_driver">
      </div>
      <div style="display:flex;align-items:center;justify-content:center;width:100%;">
         <button style="background: <?= $color->value; ?>;" type="submit">Kirim</button>
         <a style="font-weight: bold; color: <?= $color->value; ?>;" href="<?= base_url('admin/driver'); ?>">Batal</a>
      </div>
   </form>
   
</body>

</html>