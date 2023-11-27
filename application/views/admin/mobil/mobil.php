<div class="mobil">

   <div style="background: <?= $color->value; ?>;" class="t-head">
      <div class="td mbl-no">
         <p>No</p>
      </div>
      <div class="td mbl-nama">
         <p class="name">Nama</p>
      </div>
      <div class="td mbl-harga">
         <p>Harga</p>
      </div>
      <div class="td mbl-status">
         <p>Status</p>
      </div>
      <div class="td mbl-warna">
         <p>Warna</p>
      </div>
      <div class="td mbl-tahun">
         <p>Tahun</p>
      </div>
      <div class="td mbl-kapasitas">
         <p>Kapasitas</p>
      </div>
      <div class="td mbl-nopol">
         <p>Nopol</p>
      </div>
      <div class="td mbl-tindakan">
         <p>Tindakan</p>
      </div>
   </div>

   <div class="admin">
      
      <div class="table">
         <?php $no = 1;
         foreach ($mobil as $mbl) : ?>
            <div class="tr">
               <div style="border: 1px solid <?= $color->value; ?>;" class="mbl-no td">
                  <p><?= $no++; ?></p>
               </div>
               <div style="cursor:pointer;border: 1px solid <?= $color->value; ?>;" class="mbl-nama td">
                  <p class="name" onclick="window.location = '<?= base_url('rombax/img/'.$mbl->foto_mobil); ?>'"><?= $mbl->nama_mobil; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="mbl-harga td">
                  <p>Rp. <?= number_format($mbl->harga_mobil); ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="mbl-status td">
                  <p><?= $mbl->status_mobil; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="mbl-warna td">
                  <p><?= $mbl->warna_mobil; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="mbl-tahun td">
                  <p><?= $mbl->tahun; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="mbl-kapasitas td">
                  <p><?= $mbl->kapasitas; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="mbl-nopol td">
                  <p><?= $mbl->nopol; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="mbl-tindakan td">
                  <a onclick="return confirm('Temenan boss <?= $mbl->nama_mobil; ?> pan di ubah?')" class="update-btn" href="<?= base_url('admin/editMobil/' . $mbl->id_mobil); ?>">Ubah</a>
                  <a onclick="return confirm('Temenan boss <?= $mbl->nama_mobil; ?> pan di hapus?')" class="delete-btn" href="<?= base_url('admin/hapusMobil/' . $mbl->id_mobil); ?>">Hapus</a>
               </div>
            </div>
         <?php endforeach; ?>
      </div>

      <?php if (count($mobil) < 1) : ?>
         <br><br><br>
         <h4 style="color: <?= $color->value; ?>;" id="empty-msg">Belum ada mobil boss!</h4>
      <?php endif; ?>
   </div>

   <a style="
      background: <?= $color->value; ?>;
   " href="<?= base_url('admin/tambahMobil'); ?>" class="new-car">Mobil baru</a>

</div>