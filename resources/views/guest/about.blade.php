@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-body my-5 px-5 py-5">
                <h1 class="text-center fw-bolder text-primary my-3">
                    About Us
                </h1>
                <div class="fs-5">
                    <p>Legendary Writers is a writing service for students. It was started by academic
                        professionals who saw
                        it as unfair that students have to sacrifice massive amounts of sleep and personal life to
                        complete
                        their homework on time, and still barely pull it off. We’re here to tell you can forget about
                        all
                        those late nights. Give your tasks to us, and we’ll complete them quickly and to the high
                        standard
                        your professors hold you to.</p>
                    <h3 class="text-start   text-primary">
                        Professional Writers.
                    </h3>
                    <p>To earn a place on our team, they’ve undergone a stringent testing process. It includes
                        testing for speed and efficiency, style, error-free writing, and research skills. More
                        importantly,
                        each of our writers is an expert in writing for a certain topic. This is so that we can assign
                        them
                        only the papers they’re qualified to write, and you get the best possible expertise, which is
                        especially important when it comes to dissertation and term paper writing.</p>
                    <h3 class="text-start text-primary">Quality Assurance Specialists.</h3>
                    <p>Their task is assigning papers to writers based on topic and available time. After the
                        paper has been written, they check it for plagiarism. The team also includes professional
                        editors to
                        check the paper for any errors, grammatical or stylistic.</p>
                    <h3 class="text-start text-primary">Our Customer Support</h3>
                    <p>They are here day and night to take all your questions and provide you with answers and
                        guidance when it comes to using our service. If there’s something you’d like explained at any
                        point
                        before or during your order, don’t hesitate to call them, or start a chat.</p>
                </div>
                <h3 class="text-primary text-start">Contact Us</h3>
                <p>Phone: +254 7-05 234 302<br><br>
                    Email: support@legendarywriters.net<br><br>
                    Address: 156 Westlands, Nairobi. 6300, Nairobi<br></p>

            </div>

            <div class="text-center">
                <a class="btn btn-secondary rounded-pill text-white px-3" href="{{ route('create.order') }}">Make an
                    order</a>
            </div>




        </div>
    </div>
</div>
@endsection