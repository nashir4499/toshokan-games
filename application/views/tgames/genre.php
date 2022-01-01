<div class="container isi">
    <!-- Text Atas -->
    <div class="row">
        <div class="col">
            <h3>Genre</h3>
        </div>
    </div>
    <!-- End Text Atas -->
    <hr>
    <br>
    <!-- isi conter -->
    <div class="row mb-3">
        <?php foreach ($genre as $genre) : ?>
            <div class="col-md-3 genre">
                <a href="<?= base_url('tgames/cariGenre/') . $genre['id']; ?>"><?= $genre['nama_genre']; ?></a>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- end isi conter -->

</div>