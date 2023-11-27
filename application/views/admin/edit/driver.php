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

   <br><br><br><br>

   <form action="<?= base_url('admin/updateDriver'); ?>" method="POST">
      <h2>Ubah data <strong style="color: <?= $color->value; ?>;"><?= $get->nama_driver; ?></strong></h2>
      <input type="hidden" name="id_driver" value="<?= $get->id_driver; ?>">
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Nama</strong></p>
         <input type="text" name="nama_driver" value="<?= $get->nama_driver; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Alamat</strong></p>
         <input type="text" name="alamat_driver" value="<?= $get->alamat_driver; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">No Telp</strong></p>
         <input type="text" name="tlp_driver" value="<?= $get->tlp_driver; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Status</strong></p>
         <input type="text" name="status_driver" value="<?= $get->status_driver; ?>">
      </div>
      <div style="display:flex;align-items:center;justify-content:center;width:100%;">
         <button style="background: <?= $color->value; ?>;" type="submit">Ubah</button>
         <a style="font-weight: bold; color: <?= $color->value; ?>;" href="<?= base_url('admin/driver'); ?>">Batal</a>
      </div>
   </form>

</body>

</html>