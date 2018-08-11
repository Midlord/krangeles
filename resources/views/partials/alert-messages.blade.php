@if(Session::has('alert-type'))

  @push('js')
  <script>
    $(function() {
      swal("{!! ucwords(Session::get('alert-type')) !!}!","{!! Session::get('alert-message') !!}", "{!! Session::get('alert-type') !!}");
    });
  </script>
  @endpush

@endif