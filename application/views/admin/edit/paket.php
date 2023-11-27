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

   <form action="<?= base_url('admin/updatePaket'); ?>" method="POST">
      <h2>Ubah data <strong style="color: <?= $color->value; ?>;"><?= $get->nama_paket; ?></strong></h2>
      <input type="hidden" name="id_paket" value="<?= $get->id_paket; ?>">
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Nama</strong></p>
         <input type="text" name="nama_paket" value="<?= $get->nama_paket; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Durasi</strong></p>
         <input type="text" name="durasi" value="<?= $get->durasi; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Biaya</strong></p>
         <input type="text" name="biaya" value="<?= $get->biaya; ?>">
      </div>
      <div style="display:flex;align-items:center;justify-content:center;width:100%;">
         <button style="background: <?= $color->value; ?>;" type="submit">Ubah</button>
         <a style="font-weight: bold; color: <?= $color->value; ?>;" href="<?= base_url('admin/paket'); ?>">Batal</a>
      </div>
   </form>

</body>

</html>