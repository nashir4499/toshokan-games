<!-- dingding atas -->

<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <!-- isi -->
        <div class="row no-gutters">
            <div class="col-sm-8 mb-2">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner slider1">
                        <?php foreach ($slide as $key => $sacak) : ?>
                            <div class="carousel-item <?php echo ($key == 0) ? "active" : ""; ?>">
                                <a href="<?= base_url('tgames/konten/') . $sacak['id']; ?>">
                                    <img src="<?= base_url('assets/img/games/') . $sacak['gambar_landscape'] ?>" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block tulisanS1">
                                        <h5><?= $sacak['nama'] ?></h5>
                                        <p><?= $sacak['genre'] ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 dingding mb-4">
                            <a href="<?= base_url('tgames/konten/') . $dinding1['id']; ?>"><img src="<?= base_url('assets/img/games/') . $dinding1['gambar_landscape']; ?>" class="" alt="">
                                <div class="tulisanS2">
                                    <?= $dinding1['nama']; ?>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 dingding">
                            <a href="<?= base_url('tgames/konten/') . $dinding2['id']; ?>"><img src="<?= base_url('assets/img/games/') . $dinding2['gambar_landscape']; ?>" class="" alt="">
                                <div class="tulisanS2">
                                    <?= $dinding2['nama']; ?>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end isi -->
    </div>
</div>

<!-- end dinding atas -->

<!-- new games -->
<div class="container-fluid">
    <h1>New Games</h1>
    <div class="row no-gutters">
        <?php foreach ($gamesbaru as $gms) : ?>
            <div class="col-md-2 item">
                <a href="<?= base_url('tgames/konten/') . $gms['id']; ?>">
                    <img src="<?= base_url('assets/img/games/') . $gms['gambar_portrait'] ?>" alt="">
                    <div class="text-block">
                        <?= $gms['nama'] ?>
                        <div class="sembunyi">Rilis: <?= date('d F Y', strtotime($gms['rilis'])); ?></div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- end new games -->
<br>
<!-- Top Games -->
<div class="container-fluid">
    <h1>Top Games</h1>
    <div class="row no-gutters">
        <?php foreach ($gamestop as $gms) : ?>
            <div class="col-md-2 item">
                <a href="<?= base_url('tgames/konten/') . $gms['id']; ?>">
                    <img src="<?= base_url('assets/img/games/') . $gms['gambar_portrait'] ?>" alt="">
                    <div class="text-block">
                        <?= $gms['nama'] ?>
                        <div class="sembunyi">Rilis: <?= date('d F Y', strtotime($gms['rilis'])); ?></div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- End Top Games -->
<br>
<!-- Last Update -->
<div class="container-fluid">
    <h1>Last Update</h1>
    <div class="row no-gutters">
        <?php foreach ($gamesup as $gms) : ?>
            <div class="col-md-2 item">
                <a href="<?= base_url('tgames/konten/') . $gms['id']; ?>">
                    <img src="<?= base_url('assets/img/games/') . $gms['gambar_portrait'] ?>" alt="">
                    <div class="text-block">
                        <?= $gms['nama'] ?>
                        <div class="sembunyi">Rilis: <?= date('d F Y', strtotime($gms['rilis'])); ?></div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- End Last Update -->