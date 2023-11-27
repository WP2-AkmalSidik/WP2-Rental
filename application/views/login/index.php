<div class="modal-box login-modal">
    <div class="box login-box" style="
        background: linear-gradient(180deg, <?= $color->value; ?> 3%, <?= $color->value; ?> 15%, lightgrey 100%);
    ">
        <p title="Tutup" class="close-box" style="top:-8%;">x</p>
        <h3>Sudah punya akun?</h3>
        <form action="<?= base_url('login'); ?>" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button style="background: <?= $color->value; ?>;" type="submit">Masuk</button>
        </form>
    </div>
</div>