@extends('admin.layouts.app')

@push('libs-style')
  <!-- Data table css -->
  <link href="{{ asset('admin/plugins/datatables/DataTables/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@section('contents')
  <!-- Row -->
  <div class="row">
    <div class="col-12">
      <!--div-->
      <div class="card">
        {{-- <div class="card-header d-flex justify-content-between">
          <div class="card-title">{{ $title }}</div>
          <a href="{{ route('rate.create') }}" class="btn btn-primary">
            <i class="fe fe-plus"></i>
            Create new
          </a>
        </div> --}}
        <div class="card-body">
          <div class="">
            @include('admin.order._table')
          </div>
        </div>
      </div>
      <!--/div-->
    </div>
  </div>
  <!-- /Row -->
@endsection

@push('libs-script')
  <!-- INTERNAL Data tables -->
  <script src="{{ asset('admin/plugins/datatables/DataTables/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables/DataTables/js/dataTables.bootstrap5.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables/Responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('admin/js/datatables.js') }}"></script>
@endpush
