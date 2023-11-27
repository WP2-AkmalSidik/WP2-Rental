<div class="paket">
   <div style="background: <?= $color->value; ?>;" class="t-head">
      <div class="pkt-no td">
         <p>No</p>
      </div>
      <div class="pkt-nama td">
         <p class="name">Nama</p>
      </div>
      <div class="pkt-durasi td">
         <p>Durasi</p>
      </div>
      <div class="pkt-biaya td">
         <p>Biaya</p>
      </div>
      <div class="pkt-tindakan td">
         <p>Tindakan</p>
      </div>
   </div>

   <div class="admin">

      <div class="table">
         <?php $no = 1;
         foreach ($paket as $pkt) : ?>
         <div class="tr">
            <div style="border: 1px solid <?= $color->value; ?>;" class="pkt-no td">
               <p><?= $no++; ?></p>
            </div>
            <div style="border: 1px solid <?= $color->value; ?>;" class="pkt-nama td">
               <p class="name"><?= $pkt->nama_paket; ?></p>
            </div>
            <div style="border: 1px solid <?= $color->value; ?>;" class="pkt-durasi td">
               <p><?= $pkt->durasi; ?></p>
            </div>
            <div style="border: 1px solid <?= $color->value; ?>;" class="pkt-biaya td">
               <p>Rp <?= number_format($pkt->biaya); ?></p>
            </div>
            <div style="border: 1px solid <?= $color->value; ?>;" class="pkt-tindakan td">
               <a onclick="return confirm('Temenan boss <?= $pkt->nama_paket; ?> pan di ubah?')" class="update-btn" href="<?= base_url('admin/editpaket/' . $pkt->id_paket); ?>">Ubah</a>
               <a onclick="return confirm('Temenan boss <?= $pkt->nama_paket; ?> pan di hapus?')" class="delete-btn" href="<?= base_url('admin/deletepaket/' . $pkt->id_paket); ?>">Hapus</a>
            </div>
         </div>
         <?php endforeach; ?>
      </div>

      <?php if (count($paket) < 1) : ?>
         <br><br><br>
         <h4 style="color: <?= $color->value; ?>;" id="empty-msg">Belum ada paket boss!</h4>
      <?php endif; ?>
   </div>
   <a style="
      background: <?= $color->value; ?>;
   " href="<?= base_url('admin/tambahPaket'); ?>" class="new-paket">Paket baru</a>
</div>