<!-- //=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======// -->

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?= $title; ?></title>
   <link rel="stylesheet" type="text/css" href="<?= base_url('rombax/css/'); ?>member-edit-profile.css">
</head>

<body>

   <br><br>
   <br><br>

   <form class="edit-profile" style="margin-bottom:1vh;" action="<?= base_url('editprofile/update'); ?>" method="POST">
      <h2>Ubah data <strong style="color: <?= $color->value; ?>;"><?= $me->nama_member; ?></strong></h2>
      <input type="hidden" name="nik" value="<?= $me->nik; ?>">
      <input type="text" name="nama_member" value="<?= $me->nama_member; ?>">
      <input type="text" name="alamat_member" value="<?= $me->alamat_member; ?>">
      <input type="text" name="tlp_member" value="<?= $me->tlp_member; ?>">
      <input type="text" name="ttl_member" value="<?= $me->ttl_member; ?>">
      <button style="background: <?= $color->value; ?>;" type="submit">Ubah</button>
   </form>

   <a style="font-weight: bold;color: <?= $color->value; ?>;" href="<?= base_url(); ?>">Batal</a>

</body>
</html>