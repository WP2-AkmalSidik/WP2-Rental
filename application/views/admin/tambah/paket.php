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

<form style="height:unset;" action="<?= base_url('admin/addPaket'); ?>" method="POST" enctype="multipart/form-data">
      <h2><strong style="color: <?= $color->value; ?>;">Paket baru</strong></h2>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Nama</strong></p>
         <input type="text" name="nama_paket">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Durasi</strong></p>
         <select name="durasi" id="durasi_paket">
            <option value="1 Hari">1 Hari</option>
            <option value="2 Hari">2 Hari</option>
            <option value="3 Hari">3 Hari</option>
            <option value="4 Hari">4 Hari</option>
            <option value="5 Hari">5 Hari</option>
            <option value="6 Hari">6 Hari</option>
            <option value="7 Hari">7 Hari</option>
            <option value="8 Hari">8 Hari</option>
            <option value="9 Hari">9 Hari</option>
            <option value="10 Hari">10 Hari</option>
         </select>
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Biaya</strong></p>
         <input type="number" name="biaya">
      </div>
      <div style="display:flex;align-items:center;justify-content:center;width:100%;">
         <button style="background: <?= $color->value; ?>;" type="submit">Kirim</button>
         <a style="font-weight: bold; color: <?= $color->value; ?>;" href="<?= base_url('admin/paket'); ?>">Batal</a>
      </div>
   </form>
   
</body>

</html>