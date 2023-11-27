<div class="modal-box profile-modal">
    <div class="box profile-box" style="
        color: rgb(60, 60, 60);
        background: linear-gradient(180deg, <?= $color->value; ?> 5%, <?= $color->value; ?> 7%, rgb(231, 231, 231) 50%, rgb(231, 231, 231) 50%);
    ">
        <p title="Tutup" class="close-box" style="top:-3%;">x</p>
        <h3 style="
            color: white;
            position: relative;
            top: -10%;
            letter-spacing: 1.5px;
        "><?= $me->nama_member; ?></h3>
        <br>
        <h5>Alamat: <?= $me->alamat_member; ?></h5>
        <h5>No. telp: <?= $me->tlp_member; ?></h5>
        <h5>NIK: <?= $me->nik; ?></h5>
        <h5>Tempat lahir: <?= $me->ttl_member; ?></h5>
        <button style="margin:5vh;width:35%; background: <?= $color->value; ?>;" class="edit-profile-btn">Edit profile</button>
    </div>
</div>

<script>
    $(document).ready( ()=>
    {
        let editProfile = $('.edit-profile-btn');
        editProfile.click( ()=>
        {
            window.location = 'editprofile';
        })
    })
</script>