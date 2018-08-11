<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Korean Restaurant Locator AdminPanel</title>

    @include('partials.admin.css-files')

     <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('layouts.admin.sidebar')

        <!-- top navigation -->
        @include('layouts.admin.header')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           @yield('content')
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('layouts.admin.footer')
        <!-- /footer content -->
      </div>
    </div>
    @include('partials.admin.js-files')
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
