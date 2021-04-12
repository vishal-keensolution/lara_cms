<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link href="<?php echo e(asset('public/admin/plugins/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('public/admin/dist/css/adminlte.min.css')); ?>" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <?php echo $__env->yieldContent('top_left'); ?>
    <?php echo $__env->yieldContent('top_right'); ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin-Panel</span>
    </a>
      <!-- Sidebar Menu -->
       <div class="sidebar">
       <?php echo $__env->yieldContent('left_sb'); ?>
       </div>
      <!-- /.sidebar-menu -->
<<<<<<< HEAD
   
=======
    
>>>>>>> b75fedf5d71cce936f8d531ff4c2b00eb70f023c
    <!-- /.sidebar -->
  </aside>
 </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $__env->yieldContent('h1_heading'); ?></h1>
          </div>
          <div class="col-sm-6">
            <?php echo $__env->yieldContent('breadcrumb'); ?>
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php echo $__env->yieldContent('copright'); ?>  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script type="text/javascript" src="<?php echo e(asset('public/admin/plugins/jquery/jquery.min.js')); ?>"></script>

<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo e(asset('public/admin/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('public/admin/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('public/admin/dist/js/demo.js')); ?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH E:\wamp\www\lara_cms\resources\views/layouts/master.blade.php ENDPATH**/ ?>