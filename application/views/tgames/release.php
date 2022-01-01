<div class="container isi">
    <!-- bagian atas -->
    <div class="row ">
        <div class="col">
            <h3>Release Date</h3>
        </div>
    </div>
    <!-- end bagian atas -->
    <hr>

    <!-- tabel atas -->
    <div class="row mb-3 mb-n3">
        <div class="col-md-2 text-center ikonten">
            <h5>Cover</h5>
        </div>
        <div class="col-md-8 text-justify ikonten">
            <h5>Info</h5>
        </div>
        <div class="col-md-2 ikonten">
            <h5>Realase Date</h5>
        </div>
    </div>
    <!-- end tabel atas -->
    <hr>
    <!-- isi -->
    <?php foreach ($games as $gms) : ?>
        <div class="row">
            <div class="col-md-2 item-rilis">
                <a href="<?= base_url('tgames/konten/') . $gms['id']; ?>">
                    <img src="<?= base_url('assets/img/games/') . $gms['gambar_portrait']; ?>" alt="">
                </a>
            </div>
            <div class="col-md-8 text-justify ikonten text-rilis">
                <a href="<?= base_url('tgames/konten/') . $gms['id']; ?>">
                    <h3><b><?= $gms['nama']; ?></b></h3>
                </a>
                <?= $gms['sinopsis']; ?>
            </div>
            <div class="col-md-2 text-justify ikonten text-center">
                <div class="rilis">🗓
                    <h6> <?= date('d F Y', strtotime($gms['rilis'])); ?> </h6>
                    <br>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <hr>
    <!-- end isi -->

</div>