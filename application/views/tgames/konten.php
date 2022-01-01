<div class="container isi">
    <hr>
    <br>
    <!-- isi bagian atas -->
    <div class="row">
        <div class="col-md-4 gkonten">
            <img src="<?= base_url('assets/img/games/') . $games['gambar_portrait']; ?>" alt="">
        </div>
        <div class="col-md-8 text-justify ikonten">
            <h3 class="text-center mb-3"><b><?= $games['nama']; ?></b></h3>
            <hr>
            <h5><b>Sinopsis: </b></h5>
            <?= $games['sinopsis'] ?>
        </div>
    </div>
    <hr>
    <!-- end isi bagian atas -->

    <!-- informasi games -->
    <h3>Information</h3>

    <div class="row">
        <div class="col-md-6 ikonten text-justify">
            <?= $games['informasi'] ?>
        </div>
        <div class="col-md-6 ikonten text-justify">
            <p><b>Series: </b><?= $games['series'] ?></p>
            <p><b>Release: </b><?= date('d F Y', strtotime($games['rilis'])); ?></p>
            <?= $games['genre'] ?>
            <?= $games['mode'] ?>
            <?= $games['platform'] ?>
        </div>
    </div>
    <!-- end informasi games -->
    <hr>

    <!-- SYSTEM REQUIREMENTS -->
    <h3>System Requirements</h3>

    <div class="row">
        <div class="col-md-6 ikonten text-justify">
            <b>MINIMUM:</b>
            <?= $games['minimum'] ?>
        </div>
        <div class="col-md-6 ikonten text-justify">
            <b>RECOMMENDED:</b>
            <?= $games['rekomen'] ?>
        </div>
    </div>
    <!-- End SYSTEM REQUIREMENTS -->
    <hr>
    <!-- kolom komentar -->
    <h3>Comment</h3>

    <div class="row ikonten">
        <div class="col">
            <form action="">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Silahkan Isi Komentar Dibawah Sini:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end kolom komentar -->
    <hr>

</div>