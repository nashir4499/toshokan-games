<div class="container isi">
    <!-- Text Atas -->
    <div class="row">
        <div class="col">
            <h3><?= $title ?></h3>
        </div>
        <div class="col">
            <div class="dropdown text-right">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url('menu/ubah?sort=nama') ?>">Nama</a>
                    <a class="dropdown-item" href="<?= base_url('menu/ubah?sort=rilis') ?>">Rilisan Terbaru</a>
                    <a class="dropdown-item" href="<?= base_url('menu/ubah?sort=update') ?>">Update Terbaru</a>
                </div>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <!-- End Text Atas -->
    <hr>
    <br>
    <!-- isi conter -->
    <div class="row mb-3">
        <?php foreach ($games as $gms) : ?>
            <div class="col-md-2 item">
                <a href="<?= base_url('menu/detail_ubah/') . $gms['id']; ?>">
                    <img src="<?= base_url('assets/img/games/') . $gms['gambar_portrait']; ?>" alt="">
                    <div class="list-text-block">
                        <?= $gms['nama']; ?>
                        <div class="sembunyi">Rilis: <?= date('d F Y', strtotime($gms['rilis'])); ?></div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- end isi conter -->

</div>