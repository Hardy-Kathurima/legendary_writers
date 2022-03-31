@extends('layouts.main')

@section('content')
<section id="how-we-work">
    <div class="container-lg">
        <div class="row my-5">
            <div class="col-md-6">
                <h1 class="display-3 fw-bolder mb-3">Order an essay on LegendaryWriters</h1>
                <p class="lead mb-3">
                    Is schoolwork getting too much? Order essay online and go through your assignments with no stress.
                    Our professional writers are always ready to help you with any task. It only takes three steps!
                </p>
                <div class="action">
                    <a class="btn btn-primary btn-lg" href="#">Order now</a>
                </div>

            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <img src="{{ asset('images/order.jpg') }}" alt="" class="img-fluid rounded img-thumbnail">
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4 class="text-primary mb-3 fw-bold display-5">01</h4>
                <h2 class="display-5 fw-bolder">Fill Out an Order Form</h2>
                <p class="lead">Fill out the order form with the correct paper details. Please ensure all documents are
                    attached and the fields are filled appropriately. Add the correct contact details as they will be
                    our medium of communication.</p>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <img src="{{ asset('images/fill-form.png') }}" alt="form illustration" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row align-items-center">

            <div class="col-md-6">
                <div class="text-center">
                    <img src="{{ asset('images/payment.png') }}" alt="payment illustration" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-primary mb-3 fw-bold display-5">02</h4>
                <h2 class="display-5 fw-bolder">Make payment</h2>
                <p class="lead">To start working on your order we require full payment prior to work delivery. We
                    currently only offer PayPal as our payment gateway, more will be included later</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4 class="text-primary mb-3 fw-bold display-5">03</h4>
                <h2 class="display-5 fw-bolder">Get an expert writer</h2>
                <p class="lead">Once payment is confirmed a writer will start working on your order as per the provided
                    paper details. Writer availability varies with the paper complexity.</p>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <img src="{{ asset('images/writer.png') }}" alt="writer illustration" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row align-items-center">

            <div class="col-md-6">
                <div class="text-center">
                    <img src="{{ asset('images/payment.png') }}" alt="payment illustration" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-primary mb-3 fw-bold display-5">04</h4>
                <h2 class="display-5 fw-bolder">Recieve your essay</h2>
                <p class="lead">The completed paper will be sent through the submitted email address. Incase there are
                    any slight disparities with the initial instructions, do not hesitate to use ask for a free
                    revision.</p>
            </div>
        </div>

    </div>

</section>
@endsection