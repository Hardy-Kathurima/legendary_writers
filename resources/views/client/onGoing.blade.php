@extends('layouts.client')

@section('content')
<style>
    nav svg {
        max-height: 20px;
    }
</style>
<div class="container">
    @livewire('client-components.on-going')
</div>
@endsection