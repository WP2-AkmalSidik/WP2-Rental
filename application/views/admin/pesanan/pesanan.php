<div class="pesanan">

   <div style="background: <?= $color->value; ?>;" class="t-head">
      <div class="td psn-no">
         <p>No</p>
      </div>
      <div class="td psn-tgl">
         <p>Tanggal</p>
      </div>
      <div class="td psn-nik">
         <p>NIK</p>
      </div>
      <div class="td psn-mobil">
         <p>Mobil</p>
      </div>
      <div class="td psn-nopol">
         <p>Nopol</p>
      </div>
      <div class="td psn-paket">
         <p>Paket</p>
      </div>
      <div class="td psn-driver">
         <p>Driver</p>
      </div>
      <div class="td psn-durasi">
         <p>Durasi</p>
      </div>
      <div class="td psn-bukti">
         <p>Bukti</p>
      </div>
      <div class="td psn-tindakan">
         <p>Tindakan</p>
      </div>
   </div>

   <div class="admin">

      <div class="table">
         <?php $no = 1;foreach ($pesanan as $psn) : ?>

            <div class="tr">
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-no">
                  <p><?= $no++; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-tgl">
                  <p><?= $psn->tanggal_pemesanan; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-nik">
                  <p title="<?= $psn->nama_member; ?>"><?= $psn->nik; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-mobil">
                  <p><?= $psn->nama_mobil; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-nopol">
                  <p><?= $psn->nopol; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-paket">
                  <p><?= $psn->nama_paket; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-driver">
                  <p><?= $psn->nama_driver; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-durasi">
                  <p><?= $psn->durasi; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-bukti">
                  <?php if (!empty($psn->bukti_pembayaran)) : ?>
                     <a href="<?= base_url('rombax/bukti_pembayaran/') . $psn->bukti_pembayaran; ?>">Lihat</a>
                  <?php endif; ?>
                  <?php if (empty($psn->bukti_pembayaran)) : ?>
                     <p>Belum bayar</p>
                  <?php endif; ?>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td psn-tindakan">
                  <?php if (!empty($psn->bukti_pembayaran)) : ?>
                     <a onclick="return confirm('Terima pesanan kie boss?')" href="<?= base_url('admin/confirm/' . $psn->id_pesanan . '/' . $psn->username) ?>">Terima</a>
                  <?php endif; ?>
                  <a class="delete-btn" onclick="return confirm('Ciyus boss kie pan dihapus?')" href="<?= base_url('admin/delete/' . $psn->id_pesanan . '/' . $psn->username) ?>">Hapus</a>
               </div>
            </div>

         <?php endforeach; ?>
      </div>

      <?php if (count($pesanan) < 1) : ?>
         <br><br><br>
         <h4 style="color: <?= $color->value; ?>;" id="empty-msg">Belum ada pesanan boss!</h4>
      <?php endif; ?>
   </div>

</div>