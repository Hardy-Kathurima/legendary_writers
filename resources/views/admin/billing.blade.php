@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container">
  @livewire('admin-components.billing')
</div>
@endsection

@push('scripts')

<script>
  $(function () {
      $("#paypal").DataTable({
        "responsive": true, "searching":true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $(".card .card-body #showCard").DataTable({
        "responsive": true, "searching":true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>

@endpush