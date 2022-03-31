@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container">
    @livewire('admin-components.detail-in-process',['order_id'=>$order_id,'user_id'=>$user_id])
</div>
@endsection

@push('scripts')



@endpush