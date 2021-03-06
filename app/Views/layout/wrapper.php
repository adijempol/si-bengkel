<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/docs/assets/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/docs/assets/css/style.css">
</head>

<body class="hold-transition sidebar-mini">

    <?= $this->include('layout/navbar'); ?>
    <?= $this->include('layout/sidebar'); ?>
    <?= $this->renderSection('content'); ?>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2021 <a href="https://adminlte.io">D'Garage</a>.</strong> All rights reserved.
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>/template/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/template/docs/assets/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>/template/docs/assets/js/script.js"></script>
    <script src="<?= base_url() ?>/template/docs/assets/js/addReqOrder.js"></script>
    <script src="<?= base_url() ?>/template/docs/assets/js/aditMekanik.js"></script>
    <script src="<?= base_url() ?>/template/docs/assets/js/editPart.js"></script>
    <script src="<?= base_url() ?>/template/docs/assets/js/print.js"></script>
    <script src="<?= base_url() ?>/template/docs/assets/js/disableSpk.js"></script>

    <script src="<?= base_url() ?>/template/docs/assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>/template/docs/assets/js/my-sweet.js"></script>

</body>

</html>