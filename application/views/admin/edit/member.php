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

   <form action="<?= base_url('admin/updateMember'); ?>" method="POST">
      <h2>Ubah data <strong style="color: <?= $color->value; ?>;"><?= $get->nama_member; ?></strong></h2>
      <input type="hidden" name="nik" value="<?= $get->nik; ?>">
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Nama</strong></p>
         <input type="text" name="nama_member" value="<?= $get->nama_member; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Alamat</strong></p>
         <input type="text" name="alamat_member" value="<?= $get->alamat_member; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Telp</strong></p>
         <input type="text" name="tlp_member" value="<?= $get->tlp_member; ?>">
      </div>
      <div class="data">
         <p><strong style="color: <?= $color->value; ?>;">Tempat lahir</strong></p>
         <input type="text" name="ttl_member" value="<?= $get->ttl_member; ?>">
      </div>
      <div style="display:flex;align-items:center;justify-content:center;width:100%;">
         <button style="background: <?= $color->value; ?>;" type="submit">Ubah</button>
         <a style="font-weight: bold; color: <?= $color->value; ?>;" href="<?= base_url('admin/member'); ?>">Batal</a>
      </div>
   </form>

</body>

</html>