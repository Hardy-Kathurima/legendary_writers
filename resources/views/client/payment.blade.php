@extends('layouts.client')

@section('content')
@foreach ($orders as $order)
<div class="container-lg">
    <div class="row card card-body mb-3">
        <div class="col-md-12">
            <div class="text-center">
                <h2 class="text-center">Thankyou for Trusting us with your paper</h2>
                <p class="lead">Your paper Cost is <span
                        class="fw-bolder text-success">${{ $order->order_cost }}.00</span></p>


                <p>Please select you prefered method of payment</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('declined'))
                    <p class="text-danger text-center p-3 lead">{{ session("declined") }}</p>
                    @endif
                    @if (session('cancelled'))
                    <p class="text-danger text-center p-3 lead">{{ session("cancelled") }}</p>
                    @endif
                    @if (session("invalid"))
                    <p class="text-danger text-center p-3 lead">{{ session("invalid") }}</p>
                    @endif


                    <div class="text-center">
                        <form action="{{ route('charge') }}" method='post'>
                            @csrf
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                            <input type="hidden" name="amount" id="amount" value="{{ $order->order_cost }}">
                            <input class="btn btn-primary btn-lg text-white rounded" type="submit" name="submit"
                                value="Pay with Paypal">
                        </form>

                        <div class="my-3"> <a class="btn btn-warning btn-lg"
                                href="{{ route('token',encrypt($order->id)) }}">Pay with card</a></div>

                        <div><a class="my-3" href="{{ route('inProcess') }}">Go back to inprocess</a></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
{{-- <div class="text-center my-3">
    <a href="{{ route('processOrder') }}">
<< Go back to orders</a> </div> </div> --}} @endsection