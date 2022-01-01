<div class="container isi">
    <!-- Text Atas -->
    <div class="row">
        <div class="col">
            <h3><?= $title ?></h3>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <!-- End Text Atas -->
    <hr>
    <!-- Tambah -->
    <!-- <button type="submit" class="btn btn-success m-2">Simpan Perubahan</button> -->
    <!-- <br> -->
    <!-- Tambah -->

    <!-- isi conter -->
    <div class="row mb-3">
        <div class="col-md-8">
            <table class="table table-hover tabel">
                <thead>
                    <tr>
                        <th scope="col">Nama Games</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($genre as $gms) : ?>
                        <tr>
                            <form action="<?= base_url('menu/ubahRating') ?>" method="post">
                                <input type="hidden" name="id" id="id" value="<?= $gms['id']; ?>">
                                <td><?= $gms['nama']; ?></td>
                                <td><img src="<?= base_url('assets/img/games/') . $gms['gambar_portrait']; ?>" alt="" width="50px"></td>
                                <td><input type="number" min="0" max="5" id="rating" name="rating" value="<?= $gms['rating']; ?>"></td>
                                <td><button type="submit" class="btn btn-success m-2">Simpan</button></td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end isi conter -->
</div>

<!-- Modal Tambah Kata-->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Genre</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- isi -->
                <form action="<?= base_url('menu/tambahGenre') ?>" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="editGenre">Nama Genre</label>
                        <input type="text" class="form-control" id="editGenre" name="editGenre" placeholder="Nama Genre">
                    </div>
                    <!-- end isi -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>