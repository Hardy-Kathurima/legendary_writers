@extends('layouts.main')

@section('content')
@livewire('guest-components.contact-us')
<div class="text-center">
    <a class="btn btn-secondary rounded-pill text-white px-3" href="{{ route('create.order') }}">Order Now</a>
</div>

@endsection