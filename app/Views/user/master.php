<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KAMPUNG LELE</title>

    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link href="<?= base_url() ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="<?= base_url() ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    .navbar-nav {
        background-color: #142435;
    }
</style>

<body>

    <div id="wrapper">

        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <img src="img/Logo kampung lele.jpeg" alt="Logo" style="height: 60px; width: 70px;">
                <div class="sidebar-brand-text mx-3">Kampung Lele</div>
            </a>

            <hr class="sidebar-divider my-2">

            <div class="sidebar-heading">
                Home
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/') ?> ">
                    <i class="fas fa-home text-light"></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('profil') ?> ">
                    <i class="fas fa-desktop  text-light"></i>
                    <span>Tentang Kami</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('paket') ?>">
                    <i class="fas fa-fw fa-wrench  text-light"></i>
                    <span>Paket</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                OTHER
            </div>

            <!-- Nav Item - Pages User -->
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('booking') ?>">
                    <i class="fas fa-book-reader text-light"></i>
                    <span>Booking</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url() ?>/login">
                    <i class="fas fa-sign-out-alt text-light"></i>
                    <span>Log Out</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                </nav>

                <div class="container-fluid">

                    <?= $this->renderSection('content') ?>

                </div>

            </div>

        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url() ?>/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= base_url() ?>/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="<?= base_url() ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

        <script src="<?= base_url() ?>/js/sb-admin-2.min.js"></script>

</body>

</html>