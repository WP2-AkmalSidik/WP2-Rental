<div class="modal-box register-modal">
    <div class="box register-box" style="
        background: linear-gradient(180deg, <?= $color->value; ?> 3%, <?= $color->value; ?> 15%, lightgrey 100%);
    ">
        <p title="Tutup" class="close-box">x</p>
        <h3>Mendaftar</h3>
        <form action="<?= base_url('register'); ?>" method="POST" enctype="multipart/form-data">
            <input type="number" name="nik" placeholder="NIK">
            <input type="text" name="nama" placeholder="Nama lengkap">
            <input type="text" name="ttl" placeholder="Tempat lahir">
            <input type="text" name="alamat" placeholder="Alamat">
            <input type="text" name="tlp" placeholder="No. telp">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <div class="register-input">
                <p>Foto SIM/ KTP :</p>
                <input type="file" name="jaminan" title="Pilih Foto KTP/ SIM">
            </div>
            <button id="reg-btn" style="background: <?= $color->value; ?>;" type="submit">Daftar</button>
        </form>
    </div>
</div>