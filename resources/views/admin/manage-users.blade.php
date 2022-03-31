@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container">
  @livewire('admin-components.manage-users')
</div>
@endsection

@push('scripts')

<script>
  $(function () {
      $('#manageUsers').DataTable({
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