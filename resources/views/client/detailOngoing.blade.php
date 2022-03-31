@extends('layouts.client')

@section('content')
<div class="container">
    @livewire("client-components.detail-ongoing",['orders'=>$orders,'uploadId'=>$id])
</div>
@endsection