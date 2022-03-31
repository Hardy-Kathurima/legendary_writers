@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<style>
    nav svg {
        max-height: 20px;
    }
</style>
<div class="container">
    @livewire('admin-components.detail-ongoing',['order_id'=>$order_id,'user_id'=>$user_id])
</div>
@endsection

@push('scripts')



@endpush