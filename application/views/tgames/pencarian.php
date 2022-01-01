<div class="container isi">
    <div class="row">
        <div class="col">
            <h5>SEARCH : "<?= $cari; ?>"</h5>
        </div>
    </div>
    <hr>
    <!-- isi conter -->
    <div class="row mb-3">
        <?php foreach ($games as $gms) : ?>
            <div class="col-md-2 item">
                <a href="<?= base_url('tgames/konten/') . $gms['id']; ?>">
                    <img src="<?= base_url('assets/img/games/') . $gms['gambar_portrait'] ?>" alt="">
                    <div class="list-text-block">
                        <?= $gms['nama'] ?>
                        <div class="sembunyi">Rilis: <?= date('d F Y', strtotime($gms['rilis'])); ?></div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
    <!-- end isi conter -->
</div>