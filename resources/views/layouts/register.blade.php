<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link href="{{ asset('public/admin/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/dist/css/adminlte.min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <b>Lara CMS</b>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="../../index.html" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Full name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Retype password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                     I agree to the <a href="#">terms</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <div class="social-auth-links text-center">
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i>
                Sign up using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                Sign up using Google+
              </a>
            </div>

            <a href="login.html" class="text-center">I already have a membership</a>
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
      <!-- /.register-box -->
      <!-- jQuery -->
<script type="text/javascript" src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('public/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/admin/dist/js/demo.js') }}"></script>
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
@yield('scripts')
</body>
</html>
