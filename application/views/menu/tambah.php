                <!-- Begin Page Content -->
                <div class="container-fluid tambah">
                    <?= $this->session->flashdata('message'); ?>
                    <!-- Page Heading -->
                    <h1 class="h3 text-gray-800">Tambah Games</h1>
                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <form action="<?= base_url('menu/tambahData') ?>" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Games</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama games">
                                </div>
                                <div class="form-group">
                                    <label for="series">Jenis Series</label>
                                    <input type="text" class="form-control" id="series" name="series" placeholder="series games">
                                </div>
                                <div class="form-group">
                                    <label for="rilis">Tanggal Rilis</label>
                                    <input type="date" class="form-control" id="rilis" name="rilis" placeholder="tanggal rilis">
                                </div>
                                <div class="form-group">
                                    <label for="gambar_pr">Pilih Gambar Portrait</label>
                                    <input type="file" class="form-control-file" id="gambar_pr" name="gambar_pr">
                                </div>
                                <div class="form-group">
                                    <label for="gambar_ls">Pilih Gambar Landscape</label>
                                    <input type="file" class="form-control-file" id="gambar_ls" name="gambar_lc">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea id="sinopsis" class="ck-content" name="sinopsis" placeholder="sinopsis games"></textarea>
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
                                    <textarea name="informasi" id="informasi" placeholder="bagian informasi"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="genre">Genre</label>
                                    <textarea class="form-control" id="genre" name="genre" placeholder="genre games"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mode">Mode</label>
                                    <textarea class="form-control" id="mode" name="mode" placeholder="mode games"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="platform">Platform</label>
                                    <textarea class="form-control" id="platform" name="platform" placeholder="platform games"></textarea>
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
                                    <textarea id="minimum" class="ck-content" name="minimum" placeholder="minimum system"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rekomen">Recommended System</label>
                                    <textarea id="rekomen" class="ck-content" name="rekomen" placeholder="recommended system"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success btn-lg btn-block">Tambahkan</button>
                    </form>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->