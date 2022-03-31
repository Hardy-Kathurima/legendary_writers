@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container">
    @livewire('admin-components.completed')
</div>
@endsection

@push('scripts')

<script>
    $(function () {
    //   $("#inProcess").DataTable({
    //     "responsive": true, "lengthChange": false, "autoWidth": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    //   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#orderCompleted').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>

@endpush