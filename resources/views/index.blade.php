@extends('layouts.main')

@section('content')
<section id="intro" class="bg-primary text-white py-5">
    <div class="container h-100">
        <div class="row justify-content-center  vh-md-100" style="padding-top: 80px;">
            <div class="col-md-6">
                <h4 class="display-6 fw-bolder mb-3">WRITING SERVICE AT YOUR CONVINIENCE</h4>
                <p class="lead my-3">Whether you’re just starting your biology class or are working on a term paper,
                    we’re
                    here to help. <span class="fw-bold">We offer essay help for any subject, whether it’s math, law or
                        any other topic</span>.
                </p>
                <div class="row">
                    <div class="col-md-6 text-md-start text-center">
                        <a class="btn btn-secondary text-white py-3 px-5 my-3" href="{{ route('create.order') }}">Make
                            an Order</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4  mb-5 offset-md-1 clearfix">
                @livewire('client-components.cost-calculator')
            </div>
        </div>


    </div>
</section>

<section id="who-we-are" class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <img src="{{ asset('images/write-grey.jpg') }}" class="img-fluid" alt="girl doing homework">
            </div>
            <div class="col-md-6 align-self-center">
                <h2 class="fw-bold text-primary">Legendary Writers Services</h2>
                <p class="my-2 lead">You know those boring assignments that take you forever to complete! We are a team
                    of
                    academic nerds that
                    will write them for you. We make sure things are done by the book and in a professional manner. </p>
                <p class="my-2 lead">Our main focus is offering you a variety of services including essay help, essay
                    writing,
                    assignment writing and other academic assistance in the most affordable price.</p>

            </div>
        </div>
    </div>
</section>

<section id="why-us" class=" py-5 bg-white">
    <div class="container">
        <h3 class="text-center text-primary mb-5 fw-bold">Why Choose Us</h3>
        <div class="row justify-content-center mb-3">
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="text-center me-3 align-self-center text-primary fs-3"> <i style="font-size: 40px;"
                            class="fa fa-headphones"></i>
                    </div>
                    <div>
                        <h3 class="lead fw-bold mb-3">24 / 7 support</h3>
                        <p class="lead">Got questions? Contact our essay helper support team anytime and get a response
                            within a
                            few
                            minutes in
                            the live chat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="text-center me-3 align-self-center text-primary"> <i style="font-size: 40px;"
                            class="fa fa-fingerprint"></i>
                    </div>
                    <div>
                        <h3 class="lead fw-bold">100% original papers</h3>
                        <p class="lead">When you request essay help online, we take your requirements and write the
                            paper
                            completely
                            from scratch.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="text-center me-3 align-self-center text-primary"> <i style="font-size: 40px;"
                            class="fa fa-money-bill"></i>
                    </div>
                    <div>
                        <h3 class="lead fw-bold">Affordable price</h3>
                        <p class="lead">Get essay help at a price that suits you! Choose from cheaper to more expensive
                            essay
                            writers, and get discounts.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="text-center me-3 align-self-center text-primary"> <i style="font-size: 40px;"
                            class="fa fa-paperclip"></i>
                    </div>
                    <div>
                        <h3 class="lead fw-bold">No plagiarism</h3>
                        <p class="lead">Got questions? Contact our essay helper support team anytime and get a response
                            within a few
                            minutes in
                            the live chat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="text-center me-3 align-self-center text-primary"> <i style="font-size: 40px;"
                            class="fa fa-lock"></i>
                    </div>
                    <div>
                        <h3 class="lead fw-bold">Confidentiality</h3>
                        <p class="lead">When you request essay help online, we take your requirements and write the
                            paper
                            completely
                            from scratch.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="text-center me-3 align-self-center text-primary"> <i style="font-size: 40px;"
                            class="fa fa-money-check"></i>
                    </div>
                    <div>
                        <h3 class="lead fw-bold">Money back guarantee</h3>
                        <p class="lead">Get essay help at a price that suits you! Choose from cheaper to more expensive
                            essay
                            writers, and get discounts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="how-it-works" class="container py-5">
    <h3 class="text-center text-primary fw-bold my-4">How It Works</h3>
    <div class="row justify-content-center">
        <div class="col-md-3 mb-2">
            <div class="card card-body order-step">
                <div class="d-flex justify-content-start">
                    <div class="steps bg-primary text-white d-flex align-items-center justify-content-center">1</div>
                </div>
                <div class="text-center">
                    <div class="my-3"> <i class="fa fa-file fa-3x text-primary"></i></div>
                </div>
                <h5 class="text-primary">You Place an order</h5>
                <p class="pb-2">To get started ,you need to complete an order form on our website.Ask our Support
                    managers for help
                    if you got stuck on one of the steps</p>
            </div>
        </div>
        <div class="col-md-3 mb-2">
            <div class="card card-body order-step">
                <div class="d-flex justify-content-start">
                    <div class="steps bg-primary text-white d-flex align-items-center justify-content-center">2</div>
                </div>
                <div class="text-center">
                    <div class="my-2"> <i class="fa fa-graduation-cap fa-3x text-primary"></i></div>
                </div>
                <h5 class="text-primary">We assign the best writer for you</h5>
                <p>Our manager will start searching for the writer once you've paid for the order.You will be able to
                    communicate with the writer through our message system.</p>
            </div>
        </div>
        <div class="col-md-3 mb-2">
            <div class="card card-body order-step">
                <div class="d-flex justify-content-start">
                    <div class="steps bg-primary text-white d-flex align-items-center justify-content-center">3</div>
                </div>
                <div class="text-center">
                    <div class="my-2"> <i class="fa fa-search fa-3x text-primary"></i></div>
                </div>
                <h5 class="text-primary">You review the finished work</h5>
                <p>When the paper is ready, you will receive notification and will be able to review it. You can ask for
                    a free revision if you want to change anything in it.</p>
            </div>
        </div>
        <div class="col-md-3 mb-2">
            <div class="card card-body order-step">
                <div class="d-flex justify-content-start">
                    <div class="steps bg-primary text-white d-flex align-items-center justify-content-center">4</div>
                </div>
                <div class="text-center">
                    <div class="my-3"> <i class="fa fa-download fa-3x  text-primary"></i></div>
                </div>
                <h5 class="text-primary">You download your order</h5>
                <p class="pb-2">If you are satisfied with the paper, you can approve the order and download the final
                    version in one
                    of the available file formats.Feel free to leave a review about us.</p>
            </div>
        </div>
    </div>
</section>

<div class="action container my-3">
    <div class="text-center">
        <a href="{{ route('create.order') }}" class="btn btn-secondary rounded-pill text-white px-5 py-2">Order Now</a>
    </div>
</div>

<section id="services" class="bg-primary text-white py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-5">What we can do for you</h3>
        <div class="row justify-content-center">
            <div class="col-md-3 align-items-center ">
                <p><i class="fa fa-check me-2"></i>Research Paper</p>
                <p><i class="fa fa-check me-2"></i>Essays (Any type)</p>
                <p><i class="fa fa-check me-2"></i>Term Papers</p>
                <p><i class="fa fa-check me-2"></i>Book Reports</p>
            </div>
            <div class="col-md-3">
                <p><i class="fa fa-check me-2"></i>Courseworks</p>
                <p><i class="fa fa-check me-2"></i>Case Studies</p>
                <p><i class="fa fa-check me-2"></i>Speeches</p>
                <p><i class="fa fa-check me-2"></i>Homework</p>
            </div>
            <div class="col-md-3">
                <p><i class="fa fa-check me-2"></i>Business Plans</p>
                <p><i class="fa fa-check me-2"></i>Multiple choice questions</p>
                <p><i class="fa fa-check me-2"></i>Dissertations</p>
                <p><i class="fa fa-check me-2"></i>Editing/Proofreading</p>
            </div>
            <div class="col-md-3">
                <p><i class="fa fa-check me-2"></i>Math Problems</p>
                <p><i class="fa fa-check me-2"></i>Annotated Bibliographies</p>
                <p><i class="fa fa-check me-2"></i>Articles (Any type)</p>
                <p><i class="fa fa-check me-2"></i>Literature Review</p>
            </div>
        </div>
    </div>
</section>

<section id="budget" class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 align-self-center">
                <h2 class="text-primary fw-bold">Do my paper on a <br> budget</h2>
                <p class="lead">College is difficult, and for many students, it might be hard to grasp everything
                    instantaneously.
                    Yet, they also want high grades. That's why they look for reliable do my essay for me service. If
                    you do too, look no further! Our write my essay online service is all you need.</p>
            </div>
            <div class="col-md-5 offset-md-2">
                <div class="card card-body paper-cost">
                    <h5 class="fw-bolder text-primary">Best Paper Prices</h5>
                    <div class="d-flex border-bottom border-dark mb-2 justify-content-between">
                        <p class="me-5">Academic Paper Writing</p>
                        <p>from <span class="text-secondary fw-bold">$10.00</span> / page</p>
                    </div>
                    <div class="d-flex border-bottom border-dark mb-2 justify-content-between">
                        <p class="me-5">Proofreading</p>
                        <p class="text-end">from <span class="text-secondary fw-bold">$3.00</span> / page</p>
                    </div>
                    <div class="d-flex border-bottom border-dark mb-2 justify-content-between">
                        <p class="me-5">Disertation Services</p>
                        <p>from <span class="text-secondary fw-bold">$12.00</span> / page</p>
                    </div>
                    <div class="d-flex border-bottom border-dark mb-2 justify-content-between">
                        <p class="me-5">Editing</p>
                        <p>from <span class="text-secondary fw-bold">$5.00</span> / page</p>
                    </div>
                    <div class="d-flex border-bottom border-dark mb-2 justify-content-between">
                        <p class="me-5">Rewriting</p>
                        <p>from <span class="text-secondary fw-bold">$7.00</span> / page</p>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('create.order') }}" class="btn btn-secondary text-white py-2 px-4 my-3">Order
                            Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<section id="samples" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="display-4 fw-bold mb-3">Still weighing pros and cons?</h3>
                <p class="fs-3">Take a look at the samples and place your order</p>
                <div class="row">
                    <div class="col-4">
                        <a class="btn btn-secondary text-white py-md-3 px-md-5 my-3"
                            href="{{ route('create.order') }}">Order Now</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-outline-secondary text-white py-md-3 px-md-5 my-3"
                            href="{{ route('free-samples') }}">View Sample</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<section id="reviews" class=" bg-white py-5">
    <div class="container">
        <h3 class=" text-center text-primary fw-bold mb-5">What Our Clients Say</h3>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card card-body shadow-sm text-dark">
                    <div class="d-flex justify-content-between">
                        <div>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <div>6/11/22</div>

                    </div>
                    <hr class="fw-bold">
                    <h6 class="fw-bold text-primary">Article Review</h6>
                    <p>Great work,excellent!</p>
                    <hr>
                    <div class="d-flex">
                        <p><i class="bi bi-person-fill me-3"></i></p>
                        <p>Customer #325478</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body shadow-sm text-dark">
                    <div class="d-flex justify-content-between">
                        <div>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                        </div>
                        <div>7/03/22</div>

                    </div>
                    <hr class="fw-bold">
                    <h6 class="fw-bold text-primary">Editing and Proofreading</h6>
                    <p>Got my paper on time!</p>
                    <hr>
                    <div class="d-flex">
                        <p><i class="bi bi-person-fill me-3"></i></p>
                        <p>Customer #876543</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body shadow-sm text-dark">
                    <div class="d-flex justify-content-between">
                        <div>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <div>4/06/21</div>

                    </div>
                    <hr class="fw-bold">
                    <h6 class="fw-bold text-primary">Essay</h6>
                    <p>Fast and efficient!</p>
                    <hr>
                    <div class="d-flex">
                        <p><i class="bi bi-person-fill me-3"></i></p>
                        <p>Customer #789655</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<section id="questions" class="py-5">
    <div class="container">
        <h3 class="text-center text-primary mb-5 fw-bolder">FAQ</h3>
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Can I speak with my essay writer directly?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, of course! Through an encrypted one-to-one chat, all
                                customers have the opportunity to chat with their professional paper writers. You can
                                ask for drafts, clarify any issues, or ask for study tips and they will be happy to give
                                you the information you need.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Why do I have to pay upfront for you to write my essay?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We want to make sure each paper writer on our service is fairly
                                remunerated for their work, which is why your deposit serves as a guarantee that your
                                expert will be paid if they complete a high-quality essay. Only when you have checked
                                your essay and confirmed your satisfaction will the payment be released to your writer.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What if I’m unsatisfied with an essay your paper service delivers?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Essayservice guarantees that all papers delivered by our experts
                                will be of high quality. To facilitate complete customer satisfaction, we offer
                                unlimited free revisions for each order as well as the opportunity to directly
                                communicate with your writer.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Who are your essay writers?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Our professional writers are all native English-speaking
                                institution graduates with at least three years of experience working as educational
                                writers. We take only the top 5% of all candidates who apply to work with us, taking
                                into account speed, precision, and communication skills, to ensure that you get the best
                                service.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection