@extends('layouts.client')

@section('content')
@foreach ($orders as $order)
<div class="container-lg">
    <div class="text-start">Choose Payment method</div>
    <div class="text-center"> @if (session('declined'))
        <p class="text-danger text-center p-3 lead">{{ session("declined") }}</p>
        @endif
        @if (session('cancelled'))
        <p class="text-danger text-center p-3 lead">{{ session("cancelled") }}</p>
        @endif
        @if (session("invalid"))
        <p class="text-danger text-center p-3 lead">{{ session("invalid") }}</p>
        @endif</div>
    <div class="row justify-content-center mb-5 mt-3">
        <div class="col-md-8 align-self-center">

            <div>

                <div class="card card-body mb-4">
                    <form action="{{ route('charge') }}" method='post'>
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                        <input type="hidden" name="amount" id="amount" value="{{ $order->order_cost }}">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex">
                                    <div class="align-self-center"><i class="fa fa-credit-card"></i></div>
                                    <div class="ml-5">
                                        <h3>Pay with paypal</h3>
                                        <div class="text-muted">Pay using paypal </div>

                                    </div>
                                </div>
                            </div>
                            <div class="border-left border-1 align-self-center"><input type="submit"
                                    class="btn btn-dark" value="Pay now" name="submit"></input></div>
                        </div>
                    </form>
                </div>

                <div class="card card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex">
                                <div class="align-self-center"><i class="fa fa-credit-card"></i></div>
                                <div class="ml-5">
                                    <h3>Pay with card</h3>
                                    <div class="text-muted">Insert your card details</div>

                                </div>
                            </div>
                        </div>
                        <div class="my-3"> <a class="btn btn-dark" href="{{ route('token',encrypt($order->id)) }}">Pay
                                now</a></div>
                    </div>

                </div>



            </div>





        </div>
        <div class="col-md-4">
            <div class="card card-body">
                <div class="text-start font-weight-bolder">Summary</div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span class="font-weight-bolder">Paper Type</span>
                    <span class="font-weight-bold">{{ $order->paper_type }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Number of pages</span>
                    <span>{{ $order->number_pages }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Deadline</span>
                    <span>{{ $order->urgency }}</span>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span>Academic level</span>
                    <span>{{ $order->academic_level }}</span>
                </div>

                <div>
                    @if ($order->plagiarism_report|| $order->page_summary || $order->copies_sources)
                    <div class="border-top border-bottom py-2">
                        <span class="font-weight-bold">Additional services</span>
                        @if ($order->plagiarism_report)
                        <div class="d-flex justify-content-between">
                            <span>Plagiarism Report</span>
                            <span>$5.00</span>
                        </div>
                        @endif
                        @if ($order->page_summary)
                        <div class="d-flex justify-content-between">
                            <span>One Page Summary</span>
                            <span>$5.00</span>
                        </div>
                        @endif
                        @if ($order->copies_sources)
                        <div class="d-flex justify-content-between">
                            <span>Copies Sources</span>
                            <span>$5.00</span>
                        </div>
                        @endif
                    </div>
                    @endif

                </div>
                <div class="d-flex justify-content-between border-top">
                    <p class="font-weight-bold">Total</p>
                    <p class="font-weight-bold">${{ $order->order_cost }}.00</p>
                </div>
            </div>
        </div>
        <div><a class="my-3" href="{{ route('inProcess') }}"> <i class="fa fa-arrow-left mr-3"></i> Go back to
                inprocess</a></div>
    </div>

</div>

@endforeach
{{-- <div class="text-center my-3">
    <a href="{{ route('processOrder') }}">
<< Go back to orders</a> </div> </div> --}} @endsection