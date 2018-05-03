<?php
$cakeDescription = 'SB Admin - Start Bootstrap Template';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <!-- Bootstrap core CSS-->
        <link href="css/admin/bootstrap.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="css/admin/font-awesome.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="css/admin/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/admin/sb-admin.css" rel="stylesheet">
        <?php
        $css = array(
            'admin/bootstrap.css',
            'admin/font-awesome.css',
            'dataTables.bootstrap4.css',
            'sb-admin.css',
        );
        ?>
        <?= $this->Html->css($css); ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <?= $this->element('admin/navigation') ?>
        <div class="content-wrapper">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Your Website 2018</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <?= $this->Html->link(__('Logout'), ['controller' => false, 'action' => false, 'prefix' => false, '_full' => true],['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $script = array(
                'admin/jquery.js',
                'admin/bootstrap.bundle.js',
                'admin/jquery.easing.js',
                'admin/Chart.js',
                'admin/jquery.dataTables.js',
                'admin/dataTables.bootstrap4.js',
                'admin/sb-admin.js',
                'admin/sb-admin-datatables.js',
                'admin/sb-admin-charts.js',
            );
            ?>
            <?= $this->Html->script($script) ?>
            <?= $this->fetch('script') ?>
        </div>
    </body>
</html>