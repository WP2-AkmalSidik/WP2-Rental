<!-- Left content -->

<div class="left" style="background: <?= $color->value; ?>;">
   <?php if (isset($this->session->member_login)) : ?>
      <div title="<?= $me->nama_member; ?>" class="me" style="background-image:url(<?= base_url('rombax/img/' . $me->foto_member); ?>);"></div>
      <h3><?= $me->nama_member; ?></h3>

      <div style="
                  width:70%;
                  background:lightgrey;
                  margin-top:1vh;
                  margin-bottom:3vh;
               " class="divider"></div>

      <button style="color: <?= $color->value; ?>;" class="profile-btn">Profile</button>

      <?php if ($pesanan) : ?>
         <button style="color: <?= $color->value; ?>;" class="notif-btn">Pemberitahuan</button>
         <?php if (empty($pesanan->bukti_pembayaran)) : ?>
            <button style="color: <?= $color->value; ?>;" class="upload-btn">Pembayaran</button>
         <?php endif; ?>
      <?php endif; ?>

      <button style="color: <?= $color->value; ?>;" class="logout-btn">Keluar</button>
   <?php endif; ?>
   <?php if (!isset($this->session->member_login)) : ?>
      <br><br><br>
      <br><br><br>
      <button style="color: <?= $color->value; ?>;" class="login-btn">Masuk</button>
      <button style="color: <?= $color->value; ?>;" class="register-btn">Daftar</button>
   <?php endif; ?>
</div>