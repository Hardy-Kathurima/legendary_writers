@extends('layouts.client')

@section('content')
<div class="container">
    @livewire("client-components.detail-in-process",['orders'=>$orders])
</div>
@endsection