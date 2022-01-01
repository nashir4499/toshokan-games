                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h5 text-gray-800 text-center mt-5">Selamat Datang <b><?= $user['nama'] ?></b></h1>

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pengunjung</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalPengunjung['total'] ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengunjung Hari Ini</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $pengunjung; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Online</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengunjungOnline; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fab fa-connectdevelop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Hits</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalHits['hits'] ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-mouse-pointer fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-md-center mt-5">
                        <div class="col-md-6 text-right">
                            <a href="<?= base_url('menu/tambah') ?>"><button type="button" class="btn btn-success">Tambah Info Games</button></a>
                        </div>
                        <div class="col-md-6 text-left">
                            <a href="<?= base_url('menu/ubah') ?>"><button type="button" class="btn btn-primary">Ubah Info Games</button></a>
                        </div>
                    </div>

                    <div class="row justify-content-md-center mt-5 mb-5">
                        <div class="col-md-6 text-right">
                            <a href="<?= base_url('menu/profil') ?>"><button type="button" class="btn btn-warning pl-5 pr-5">Edit Profil</button></a>
                        </div>
                        <div class="col-md-6 text-left">
                            <a href="<?= base_url('menu/hapus') ?>"><button type="button" class="btn btn-danger">Hapus Info Games</button></a>
                        </div>
                    </div>

                    <br>
                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->