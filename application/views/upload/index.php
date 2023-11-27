<div class="modal-box upload-modal">
    <div style="
        padding-top: 2vh;
        background: linear-gradient(180deg, <?= $color->value; ?> 5%, <?= $color->value; ?> 7%, rgb(231, 231, 231) 50%, rgb(231, 231, 231) 50%);
    " class="box upload-box">
        <p title="Tutup" class="close-box close-upload" style="top:unset;margin-top:4vh;">x</p>
        <h3 style="
            margin-bottom:1vh;
            color: white;
            letter-spacing: 1.5px;
            position: relative;
            top: -15%;
        ">Silahkan melakukan pembayaran</h3>
        <h5><strong style="color: <?= $color->value; ?>;">Ke nomor rekening: 0819xxx</strong></h5>
        <h5 style="color: rgb(53, 53, 53);">Kemudian upload bukti pembayaran tersebut dibawah.</h5>
        <form class="upload-form" action="<?= base_url('action/upload'); ?>" method="POST" enctype="multipart/form-data">
            <div class="upload-input">
                <p>Pilih foto: </p>
                <input title="Pilih foto" type="file" name="photo">
            </div>
            <input type="hidden" name="nik" value="<?= $me->nik; ?>">
            <button style="background: <?= $color->value; ?>;" style="margin:2vh;" type="submit">Upload</button>
        </form>
    </div>
</div>