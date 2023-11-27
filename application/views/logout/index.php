<div class="modal-box logout-modal">
    <div class="box logout-box" style="
        background: linear-gradient(180deg, <?= $color->value; ?> 5%, <?= $color->value; ?> 7%, rgb(231, 231, 231) 50%, rgb(231, 231, 231) 50%);
    ">
        <p title="Tutup" class="close-box" style="top:-8%;">x</p>
        <h3 style="color: white;">Yakin nih boss ente mau keluar?</h3>
        <br><br><br>
        <div class="logout-action">
            <button style="background: <?= $color->value; ?>;" class="logout-yes">Ya</button>
            <button style="background: <?= $color->value; ?>;" class="logout-no">Tidak</button>
        </div>
        <br><br>
    </div>
</div>