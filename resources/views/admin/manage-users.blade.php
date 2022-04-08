@extends('layouts.admin')
@section('css')
<style>
  nav svg {
    max-height: 20px;
  }
</style>
@endsection
@section('content')
<div class="container">
  @livewire('admin-components.manage-users')
</div>
@endsection

@push('scripts')



@endpush