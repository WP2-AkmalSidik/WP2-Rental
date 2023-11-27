<div class="member">
   <div style="background: <?= $color->value; ?>;" class="t-head">
      <div class="td mbr-no">
         <p>No</p>
      </div>
      <div class="td mbr-nama">
         <p class="name">Nama</p>
      </div>
      <div class="td mbr-nik">
         <p>NIK</p>
      </div>
      <div class="td mbr-alamat">
         <p>Alamat</p>
      </div>
      <div class="td mbr-tlp">
         <p>Telp</p>
      </div>
      <div class="td mbr-ttl">
         <p>TTL</p>
      </div>
      <div class="td mbr-sim">
         <p>SIM/KTP</p>
      </div>
      <div class="td mbr-tindakan">
         <p>Tindakan</p>
      </div>
   </div>

   <div class="admin">

      <div class="table">
         <?php $no = 1;foreach ($member as $mbr) : ?>
            <div class="tr">
               <div style="border: 1px solid <?= $color->value; ?>;" class="td mbr-no">
                  <p><?= $no++; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td mbr-nama">
                  <p class="name"><?= $mbr->nama_member; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td mbr-nik">
                  <p><?= $mbr->nik; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td mbr-alamat">
                  <p><?= $mbr->alamat_member; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td mbr-tlp">
                  <p><?= $mbr->tlp_member; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td mbr-ttl">
                  <p><?= $mbr->ttl_member; ?></p>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td mbr-sim">
                  <a href="<?= base_url('rombax/jaminan/' . $mbr->jaminan); ?>">Lihat</a>
               </div>
               <div style="border: 1px solid <?= $color->value; ?>;" class="td mbr-tindakan">
                  <a onclick="return confirm('Temenan boss <?= $mbr->nama_member; ?> pan di ubah?')" class="update-btn" href="<?= base_url('admin/editMember/' . $mbr->nik); ?>">Ubah</a>
                  <a onclick="return confirm('Temenan boss <?= $mbr->nama_member; ?> pan di hapus?')" class="delete-btn" href="<?= base_url('admin/deleteMember/' . $mbr->nik . '/' . $mbr->username); ?>">Hapus</a>
               </div>
            </div>
         <?php endforeach; ?>
      </div>

      <?php if (count($member) < 1) : ?>
         <br><br><br>
         <h4 style="color: <?= $color->value; ?>;" id="empty-msg">Belum ada member boss!</h4>
      <?php endif; ?>
   </div>
</div>