<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?= $title; ?></title>
   <link rel="stylesheet" href="<?= base_url('rombax/css/admin.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('rombax/css/admin-psn.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('rombax/css/admin-pkt.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('rombax/css/admin-drv.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('rombax/css/admin-mbl.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('rombax/css/admin-trs.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('rombax/css/admin-mbr.css'); ?>">
   <script src="<?= base_url('rombax/js/jquery.js'); ?>"></script>
   <script src="<?= base_url('rombax/js/admin.js'); ?>"></script>
</head>

<body>

   <input type="hidden" id="base_url" value="<?= base_url(); ?>">
   <input type="hidden" id="base_color" value="<?= $color->value; ?>">

   <nav style="background:<?= $color->value; ?>;">
      <h3><strong class="home-page">RBX</strong> <div class="title"><?= $title; ?></div></h3>
      <div class="top-buttons">
         <button class="pesanan-btn">Pesanan</button>
         <button class="paket-btn">Paket</button>
         <button class="driver-btn">Driver</button>
         <button class="transaksi-btn">Transaksi</button>
         <button class="mobil-btn">Mobil</button>
         <button class="member-btn">Member</button>
         <button onclick="" class="logout-btn">Keluar</button>
      </div>
   </nav>