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
  @livewire('admin-components.in-process')
</div>
@endsection

@push('scripts')



@endpush