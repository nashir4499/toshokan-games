                <!-- Begin Page Content -->
                <div class="container-fluid tambah">

                    <!-- Page Heading -->
                    <h1 class="h3 text-gray-800">Ubah Informasi Games</h1>
                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <form action="<?= base_url('menu/ubahData') ?>" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="id" value="<?= $games['id']; ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Games</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama games" value="<?= $games['nama']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="series">Jenis Series</label>
                                    <input type="text" class="form-control" id="series" name="series" placeholder="jenis series" value="<?= $games['series']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="rilis">Tanggal Rilis</label>
                                    <input type="date" class="form-control" id="rilis" name="rilis" placeholder="tanggal rilis" value="<?= $games['rilis']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="gambar_pr">Pilih Gambar Portrait</label>
                                    <input type="file" class="form-control-file" id="gambar_pr" name="gambar_pr">
                                    <input type="hidden" name="gambar_pr_lama" value="<?= $games['gambar_portrait']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="gambar_ls">Pilih Gambar Landscape</label>
                                    <input type="file" class="form-control-file" id="gambar_lc" name="gambar_lc">
                                    <input type="hidden" name="gambar_lc_lama" value="<?= $games['gambar_landscape']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea id="sinopsis" class="ck-content" name="sinopsis" placeholder="sinopsis games"><?= $games['sinopsis']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Bagian Informasi</h5>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="informasi">Informasi</label>
                                    <textarea name="informasi" id="informasi" placeholder="informasi bagian kiri"><?= $games['informasi']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="genre">Genre</label>
                                    <textarea class="form-control" id="genre" name="genre" placeholder="genre games"><?= $games['genre']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mode">Mode</label>
                                    <textarea class="form-control" id="mode" name="mode" placeholder="mode games"><?= $games['mode']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="platform">Platform</label>
                                    <textarea class="form-control" id="platform" name="platform" placeholder="platform games"><?= $games['platform']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Requirement System</h5>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="minimum">Minimum System</label>
                                    <textarea id="minimum" class="ck-content" name="minimum" placeholder="minimum system"><?= $games['minimum']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rekomen">Recommended System</label>
                                    <textarea id="rekomen" class="ck-content" name="rekomen" placeholder="recommended system"><?= $games['rekomen']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Ubah</button>
                    </form>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->