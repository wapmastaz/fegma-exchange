<!-- INTERNAL Notifications  Css -->
<link href="{{ asset('admin/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

<!-- INTERNAL Notifications js -->
<script src="{{ asset('admin/plugins/notify/js/rainbow.js') }}"></script>
<script src="{{ asset('admin/plugins/notify/js/jquery.growl.js') }}"></script>
<script src="{{ asset('admin/plugins/notify/js/notifIt.js') }}"></script>

@if (session()->has('notify'))
  <script>
    $.growl.notice({
      message: "You have 4 notification"
    });
    // toastr.error('hello');
    $('.notice').click(function(event) {
      event.preventDefault();
      event.stopPropagation();
      return $.growl.notice({
        message: "You have 4 notification"
      });
    });
  </script>

  @foreach (session('notify') as $msg)
    <script type="text/javascript">
      // toastr.success('hello');
      // alert(session('notify'));

      var status = "{{ $msg[0] }}";
      // toastr.success('{{ $msg[0] }}');
      //toastr[status]('{{ $msg[1] }}');

      $.growl[status]({
        message: "{{ $msg[1] }}"
      });
    </script>
  @endforeach
@endif

@if ($errors->any())
  @php
    $collection = collect($errors->all());
    $errors = $collection->unique();
  @endphp
  <script>
    "use strict";
    @foreach ($errors as $error)
      $.growl.error({message: '{{ $error }}'})
    @endforeach
  </script>
@endif
