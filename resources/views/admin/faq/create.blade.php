@extends('admin.layouts.app')

@push('libs-style')
  <!-- INTERNAL Select2 css -->
  <link href="{{ asset('admin/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <!-- INTERNAL File Uploads css-->
  <link href="{{ asset('admin/plugins/country/country.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('contents')
  <!-- Row -->
  <div class="row">
    <div class="col-12">
      <!--div-->
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div class="card-title">{{ $title }}</div>
          <a href="{{ route('faq.index') }}" class="btn btn-primary">
            <i class="fe fe-arrow-left"></i>
            Back to Faq
          </a>
        </div>
        <div class="card-body">
          <form action="{{ route('faq.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.faq._form')
          </form>
        </div>
      </div>
      <!--/div-->
    </div>
  </div>
  <!-- /Row -->
@endsection

@push('libs-script')
  <!-- INTERNAL Select2 js -->
  <script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
  <script src="{{ asset('admin/js/select2.js') }}"></script>
  <script src="{{ asset('admin/plugins/fileupload/js/dropify.js') }}"></script>
  <script src="{{ asset('admin/plugins/country/country.js') }}"></script>
  <script src="{{ asset('admin/js/filupload.js') }}"></script>
@endpush
