<div class="modal-box notif-modal">
    <div class="box notif-box" style="
        justify-centent:unset;
        color: rgb(100, 100, 100);
        background: linear-gradient(180deg, <?= $color->value; ?> 5%, <?= $color->value; ?> 7%, rgb(231, 231, 231) 50%, rgb(231, 231, 231) 50%);
    ">
        <p title="Tutup" class="close-box" style="top:-10%;">x</p>
        <h3 style="
            color: white;
            position: relative;
            top: -15%;
            letter-spacing: 1.5px;
        ">Pemberitahuan</h3>
        <br><br>
        <?php if (!$pemberitahuan) : ?>
            <p><strong>Belum ada pemberitahuan boss!</strong></p>
            <br><br>
        <?php endif; ?>
        <?php if ($pemberitahuan) : ?>
            <p><strong style="color:red;">Pesanan telah diterima!</strong></p>
            <h5>Silahakan datang ke tempat kami,</h5>
            <h5>dan bawa segera mobil pesanan anda.</h5>
        <?php endif; ?>
        <br><br>
    </div>
</div>