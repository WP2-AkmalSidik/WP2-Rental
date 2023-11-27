<div class="transaksi">

   <div style="background: <?= $color->value; ?>;" class="t-head">
      <div class="td trs-no">
         <p>No</p>
      </div>
      <div class="td trs-member">
         <p class="name">Member</p>
      </div>
      <div class="td trs-mobil">
         <p>Mobil</p>
      </div>
      <div class="td trs-setuju">
         <p>Disetujui</p>
      </div>
      <div class="td trs-biaya">
         <p>Total biaya</p>
      </div>
      <div class="td trs-tindakan">
         <p>Tindakan</p>
      </div>
   </div>

   <div class="admin">

      <div class="table">
         <?php $no = 1;foreach ($transaksi as $trs) : ?>
            <div class="tr">

               <div style="border: 1px solid <?= $color->value; ?>;" class="td trs-no">
                  <p title="id_transaksi: <?= $trs->id_transaksi; ?>"><?= $no++; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td trs-member">
                  <p class="name"><?= $trs->nama_member; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td trs-mobil">
                  <p><?= $trs->nama_mobil; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td trs-setuju">
                  <p><?= $trs->tanggal_transaksi; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td trs-biaya">
                  <p>Rp. <?= number_format($trs->biaya); ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td trs-tindakan">
                  <a onclick="return confirm('Temenan pan dihapus boss?')" class="delete-btn" href="<?= base_url('admin/deleteTrs/' . $trs->id_transaksi); ?>">Hapus</a>
               </div>
            </div>
         <?php endforeach; ?>
      </div>

      <?php if (count($transaksi) < 1) : ?>
         <br><br><br>
         <h4 style="color: <?= $color->value; ?>;" id="empty-msg">Belum ada transaksi boss!</h4>
      <?php endif; ?>
   </div>
   
   <a style="
      background: <?= $color->value; ?>;
   " class="cetak-btn" href="<?= base_url('admin/cetak/'); ?>">Cetak</a>

</div>