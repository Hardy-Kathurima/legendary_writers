@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="intro-wrapper">
        <div class="row my-5 d-flex  p-2">
            <div class="col-md-7 col-sm-12 my-3">
                <h4><span class="text-primary">WRITING SERVICE</span> <span>AT YOUR CONVINIENCE</span></h4>
                <h1 class="my-3 display-4 fw-bolder">Essay Writing Service for Every Student</h1>
                <p class="lead my-2">Whether you’re just starting your biology class or are working on a term paper,
                    we’re
                    here to help. We offer essay help for any subject, whether it’s math, law or any other topic.
                </p>

                <p class="lead my-4"> Give us
                    a try – you’ll soon see why our customers love us!</p>
                <a class="btn btn-primary btn-lg text-white" href="{{ route('create.order') }}">Write my Paper</a>

            </div>
            <div class="col-md-5 text-center">
                @livewire('client-components.cost-calculator')
            </div>


        </div>
    </div>
    <div class="row bg-white my-5 p-2">
        <div class="col-md-6 col-sm-12">
            <h2 class="display-6 fw-bold text-secondary">We are a genuine company that will do writing for you</h2>
            <p class="my-2 lead">You know those boring assignments that take you forever to complete! We are a team of
                academic nerds that
                will write them for you. We make sure things are done by the book and in a professional manner. </p>
            <p class="my-2 lead">Our main focus is offering you a variety of services including essay help, essay
                writing,
                assignment writing and other academic assistance in the most affordable price.</p>
            <p class="my-2 lead">Its our mission to provide every single student in the US with essay help.</p>
        </div>
        <div class="col-md-4 offset-md-2 col-sm-12 mt-2">
            <h5 class="my-4 text-secondary">Types of services that we offer</h5>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Research paper</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Lab report</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Math problems</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Case study</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Essay papers</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Course work</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Business plan</p>

                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Research paper</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Lab report</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Math problems</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Case study</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Essay papers</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Course work</p>
                        <p class="lead">
                            <span><i class="bi bi-check2-square text-success me-2"></i></span>
                            Business plan</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-md-8">
            <h3 class="display-6 text-center fw-bold">Our Essay service features</h3>
            <p class="text-center lead">IntelWriters provide an online essay writing service for all types of academic
                assignments. Check out
                some of
                them
                and don't hesitate to place your order</p>
        </div>
    </div>
    <div class="row my-4 d-flex justify-content-center">
        <div class="col-md-4 col-sm-12 text-center">
            <div class="text-center my-2"> <i style="font-size: 60px; color:#0d6efd ;" class="fa fa-headphones"></i>
            </div>
            <h3 class="lead fw-bold">24 / 7 support</h3>
            <p class="lead">Got questions? Contact our essay helper support team anytime and get a response within a few
                minutes in
                the live chat.</p>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
            <div class="text-center my-2"> <i style="font-size: 60px; color:#0d6efd ;" class="fa fa-fingerprint"></i>
            </div>
            <h3 class="lead fw-bold">100% original papers</h3>
            <p class="lead">When you request essay help online, we take your requirements and write the paper completely
                from scratch.</p>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
            <div class="text-center my-2"> <i style="font-size: 60px; color:#0d6efd ;" class="fa fa-money-bill"></i>
            </div>
            <h3 class="lead fw-bold">Affordable price</h3>
            <p class="lead">Get essay help at a price that suits you! Choose from cheaper to more expensive essay
                writers, and get discounts.</p>
        </div>

    </div>
    <div class="row my-4 d-flex justify-content-center">
        <div class="col-md-4 col-sm-12 text-center">
            <div class="text-center my-2"> <i style="font-size: 60px; color:#0d6efd ;" class="fa fa-paperclip"></i>
            </div>
            <h3 class="lead fw-bold">No plagiarism</h3>
            <p class="lead">Got questions? Contact our essay helper support team anytime and get a response within a few
                minutes in
                the live chat.</p>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
            <div class="text-center my-2"> <i style="font-size: 60px; color:#0d6efd ;" class="fa fa-lock"></i>
            </div>
            <h3 class="lead fw-bold">Confidentiality</h3>
            <p class="lead">When you request essay help online, we take your requirements and write the paper completely
                from scratch.</p>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
            <div class="text-center my-2"> <i style="font-size: 60px; color:#0d6efd ;" class="fa fa-money-check"></i>
            </div>
            <h3 class="lead fw-bold">Money back guarantee</h3>
            <p class="lead">Get essay help at a price that suits you! Choose from cheaper to more expensive essay
                writers, and get discounts.</p>
        </div>

    </div>

</div>
<section class="mt-3 bg-primary text-white">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6">
                <h3>Feel like we can work together?</h3>
                <p class="lead">Here is a simple flow of our approach.</p>
                <div class="work-flow">
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="bi bi-bag-check-fill fs-4 me-3"></i>
                                    <span class="fs-4">Specify your essay details</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Provide us with clear details and instructions regarding the essay you need help
                                    completing. You can also upload all the supporting resources needed in the
                                    assignment. We advice you to be thorough as possible to avoid inconveniences. NB:
                                    Upload everything together
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="bi bi-mortarboard-fill fs-4 me-3"></i>
                                    <span class="fs-4">We get an expert to work on your essay</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    After payment has been confirmed a writer will take up your assignment. Incase of
                                    any changes please contact us before the due time
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="bi bi-envelope-paper-fill fs-4 me-3"></i>
                                    <span class="fs-4">We send your completed essay</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    As soon as our writer completes your essay, the work will be sent to the email
                                    address submitted when placing an order. Your work will always be delivered before
                                    the due time
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="bi bi-check-all fs-4 me-3"></i>
                                    <span class="fs-4">You confirm and prove the essay</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    For minor corrections to the delivered work, you may request a free revision
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="text-center">
                    <img class="img-fluid illustration d-none d-md-block" src="{{ asset('images/send.png') }}"
                        alt="illustration">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection