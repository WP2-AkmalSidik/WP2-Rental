<div class="homepage">
   <?php if (isset($this->session->member_login)) : foreach ($mobil as $car) : ?>
         <section>
            <div class="data">
               <div class="mobil" style="background-image:url(<?= base_url('rombax/img/' . $car->foto_mobil); ?>)">
                  <!--CAR-->
               </div>
               <div class="info">
                  <div class="text">
                     <p style="border-bottom: 1.5px solid <?= $color->value; ?>;" class="ket"><strong style="color: <?= $color->value; ?>;">Keterangan :</strong></p>
                     <p><strong style="color: <?= $color->value; ?>;">Nama kendaraan:</strong> <?= $car->nama_mobil; ?></p>
                     <p><strong style="color: <?= $color->value; ?>;">Warna:</strong> <?= $car->warna_mobil; ?></p>
                     <p><strong style="color: <?= $color->value; ?>;">Kapasitas:</strong> <?= $car->kapasitas; ?></p>
                     <p><strong style="color: <?= $color->value; ?>;">Harga sewa:</strong> Rp. <?= number_format($car->harga_mobil); ?> / hari</p>
                     <p><strong style="color: <?= $color->value; ?>;">No. Pol:</strong> <?= $car->nopol; ?></p>
                     <p><strong style="color: <?= $color->value; ?>;">Tahun:</strong> <?= $car->tahun; ?></p>
                     <p><strong style="color: <?= $color->value; ?>;">Pajak:</strong> <?= $car->pajak; ?></p>
                     <p><strong style="color: <?= $color->value; ?>;">Status:</strong> <?= $car->status_mobil; ?></p>
                  </div>
                  <div class="action">
                     <h3>Anda tertarik dengan mobil ini?</h3>
                     <div class="buttons">
                        <button style="background: <?= $color->value; ?>;" onclick="getAction('pesan','<?= $car->nama_mobil; ?>','<?= $me->nik; ?>','<?= $car->id_mobil; ?>')">Pesan</button>
                     </div>
                  </div>
               </div>
            </div>
         </section>
   <?php endforeach;
   endif; ?>

   <div class="modal-box action-loaded">
      <div style="
         height: unset !important;
         padding: 3vh;
         color: white;
         letter-spacing: 1.5px;
         background-image: liner-gradient(to top, <?= $color->value; ?> 50%, lightgrey );
         background: linear-gradient(180deg, <?= $color->value; ?> 3%, <?= $color->value; ?> 15%, lightgrey 100%);
         " class="box action-loaded-box"
      >
      <!-- For button background -->
      <input id="actLoad-btn" type="hidden" value="<?= $color->value; ?>">
         <p style="top:50%;" onclick="removeBox()" class="close-box loaded-close">x</p>
         <div class="go">
            <!-- Loaded User Action -->
         </div>
         <br>
      </div>
   </div>

   <?php if (!isset($this->session->member_login)) : ?>
      <section>
         <div class="annonim" style="
            background: <?= $color->value; ?>;
         ">
            <div class="annonim-left">
               <h1>Mobil sewaan dengan harga terbaik?</h1>
               <h4>Ya di RBX Mobilindo tempatnya...</h4>
               <br><br>
               <br><br>
            </div>
            <div class="annonim-right">
               <h4>Silahkan masuk atau mendaftar.</h4>
               <br>
               <p style="text-align: left;"><strong style="color: lightgrey;">Alamat kami:</strong></p>
               <p><strong style="color: lightgrey;">Desa Jagapura Kec. Kersana - Brebes Jawa tengah 52264.</strong></p>
               <br><br>
            </div>
         </div>
      </section>
      <div class="properties">
         <?php foreach ($mobil_limit as $car) : ?>
            <div title="<?= $car->nama_mobil . ' - ' . $car->warna_mobil; ?>" class="mobil" style="background-image:url(<?= base_url('rombax/img/' . $car->foto_mobil) ?>)"></div>
         <?php endforeach; ?>
      </div>
   <?php endif; ?>
</div>