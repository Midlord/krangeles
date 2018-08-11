<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Korean Restaurant Locator AdminPanel</title>

    <!-- Bootstrap -->
    <link href="{{ asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="{{ asset('gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- NProgress -->
    <link href="{{ asset('gentelella/vendors/nprogress/nprogress.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" type="text/css">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('gentelella/build/css/custom.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    

     <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('layouts.owner.sidebar')

        <!-- top navigation -->
        @include('layouts.owner.header')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           @yield('content')
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('layouts.owner.footer')
        <!-- /footer content -->
      </div>
    </div>
    <!-- Sweet Alert -->
    <script type="text/javascript" src="{{asset('gentelella/js/sweetalert.js')}}"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/nprogress/nprogress.js') }}"></script>
    
    <!-- Custom Theme Scripts -->
    <script type="text/javascript" src="{{ asset('gentelella/build/js/custom.min.js') }}"></script>

    <!-- Chart.js -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- jQuery Sparklines -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- morris.js -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/raphael/raphael.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('gentelella/vendors/morris.js/morris.min.js') }}"></script>
    <!-- gauge.js -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- Skycons -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/Flot/jquery.flot.js') }}"></script>
    <script type="text/javascript" src="{{ asset('gentelella/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('gentelella/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script type="text/javascript" src="{{ asset('gentelella/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('gentelella/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot vendors -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script type="text/javascript" src="{{ asset('gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('gentelella/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/DateJS/build/date.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script type="text/javascript" src="{{ asset('gentelella/vendors/moment/min/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="{{asset('gentelella/vendors/validator/validator.js')}}"></script>

    <script type="text/javascript" src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'about' );
    </script>
  

    <script type="text/javascript">$(document).ready(function(){
    $('#productsample').DataTable();
    $('#categorysample').DataTable();
    });
    // modal
    <!-- Dialog show event handler -->
  $('#confirmDelete').on('show.bs.modal', function (e) {
      $message = $(e.relatedTarget).attr('data-message');
      $(this).find('.modal-body p').text($message);
      $title = $(e.relatedTarget).attr('data-title');
      $(this).find('.modal-title').text($title);

      // Pass form reference to modal for submission on yes/ok
      var form = $(e.relatedTarget).closest('form');
      $(this).find('.modal-footer #confirm').data('form', form);
  });

  <!-- Form confirm (yes/ok) handler, submits form -->
  $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
      $(this).data('form').submit();
  });


    </script>
    
    

  </body>
</html>
