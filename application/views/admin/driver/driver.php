<div class="driver">
   <div style="background: <?= $color->value; ?>;" class="t-head">
      <div class="drv-no td">
         <p>No</p>
      </div>
      <div class="drv-nama td">
         <p class="name">Nama</p>
      </div>
      <div class="drv-alamat td">
         <p>Alamat</p>
      </div>
      <div class="drv-tlp td">
         <p>No Telp</p>
      </div>
      <div class="drv-status td">
         <p>Status</p>
      </div>
      <div class="drv-tindakan td">
         <p>Tindakan</p>
      </div>
   </div>

   <div class="admin">

      <div class="table">
         <?php $no = 1;
         foreach ($driver as $drv) : ?>
         <div class="tr">
            <div style="border: 1px solid <?= $color->value; ?>;" class="drv-no td">
               <p><?= $no++; ?></p>
            </div>
            <div style="border: 1px solid <?= $color->value; ?>;" class="drv-nama td">
               <p class="name"><?= $drv->nama_driver; ?></p>
            </div>
            <div style="border: 1px solid <?= $color->value; ?>;" class="drv-alamat td">
               <p><?= $drv->alamat_driver; ?></p>
            </div>
            <div style="border: 1px solid <?= $color->value; ?>;" class="drv-tlp td">
               <p><?= $drv->tlp_driver; ?></p>
            </div>
            <div style="border: 1px solid <?= $color->value; ?>;" class="drv-status td">
               <p><?= $drv->status_driver; ?></p>
            </div>
            <div style="border: 1px solid <?= $color->value; ?>;" class="drv-tindakan td">
               <a onclick="return confirm('Temenan boss <?= $drv->nama_driver; ?> pan di ubah?')" class="update-btn" href="<?= base_url('admin/editdriver/' . $drv->id_driver); ?>">Ubah</a>
               <a onclick="return confirm('Temenan boss <?= $drv->nama_driver; ?> pan di hapus?')" class="delete-btn" href="<?= base_url('admin/deletedriver/' . $drv->id_driver); ?>">Hapus</a>
            </div>
         </div>
         <?php endforeach; ?>
      </div>

      <?php if (count($driver) < 1) : ?>
         <br><br><br>
         <h4 style="color: <?= $color->value; ?>;" id="empty-msg">Belum ada driver boss!</h4>
      <?php endif; ?>
   </div>
   <a style="
      background: <?= $color->value; ?>;
   " href="<?= base_url('admin/tambahDriver'); ?>" class="new-driver">Driver baru</a>
</div>