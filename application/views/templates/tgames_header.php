<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/tampilan.css') ?>">

    <link rel="shortcut icon" href="<?= base_url('assets/img/ikon.png') ?>" type="image/x-icon">

    <title>Toshokan Games</title>
</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark stylenavbar fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('tgames') ?>">TGames</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->uri->segment(2) === null) ? 'active nav-aktif' : '' ?>" href="<?= base_url('tgames') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->uri->segment(2) === 'list') ? 'active nav-aktif' : '' ?>" href="<?= base_url('tgames/list') ?>">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->uri->segment(2) === 'release') ? 'active nav-aktif' : '' ?>" href="<?= base_url('tgames/release') ?>">Release</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->uri->segment(2) === 'genre') ? 'active nav-aktif' : '' ?>" href="<?= base_url('tgames/genre') ?>">Genre</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 search" method="GET" action="<?= base_url('tgames/cari/') ?>">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- end navbar -->