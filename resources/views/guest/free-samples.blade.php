@extends('layouts.main')

@section('content')
<section id="free-samples">
    <div class="container-lg">
        <div class="row align-items-center my-4">
            <div class="col-md-6">
                <h2 class="display-3 text-primary mb-4">Sample papers</h2>
                <p class="lead">Please review some of our previous work to have a better understanding of what makes us
                    the most trusted essay writers on the internet.</p>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <img src="{{ asset("images/best-writer.jpg") }}" alt="writer"
                        class="img-fluid img-thumbnail rounded">
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-primary">Research</h5>
                        <p class="fs-5">
                            <span class="fw-bolder">Type of paper:</span>
                            <span class="text-muted">Research Design</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Paper Format:</span>
                            <span class="text-muted">APA</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Discipline:</span>
                            <span class="text-muted">History</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Pages:</span>
                            <span class="text-muted">7</span>
                        </p>
                        <a class="btn btn-primary" target="_blank"
                            href="{{ asset('/samples/RESEARCH DESIGN.pdf') }}">Read sample</a>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-primary">Essay</h5>
                        <p class="fs-5">
                            <span class="fw-bolder">Type of paper:</span>
                            <span class="text-muted">Essay</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Paper Format:</span>
                            <span class="text-muted">APA</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Discipline:</span>
                            <span class="text-muted">English</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Pages:</span>
                            <span class="text-muted">5</span>
                        </p>
                        <a class="btn btn-primary" target="_blank"
                            href="{{ '/samples/QUALITIES OF AN EFFECTIVE TEAM.pdf' }}">Read
                            sample</a>
                    </div>
                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-primary">Case Study</h5>
                        <p class="fs-5">
                            <span class="fw-bolder">Type of paper:</span>
                            <span class="text-muted">Case Study</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Paper Format:</span>
                            <span class="text-muted">APA</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Discipline:</span>
                            <span class="text-muted">English</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Pages:</span>
                            <span class="text-muted">4</span>
                        </p>
                        <a class="btn btn-primary" target="_blank" href="{{ '/samples/CASE STUDY.pdf' }}">Read
                            sample</a>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-primary">Business</h5>
                        <p class="fs-5">
                            <span class="fw-bolder">Type of paper:</span>
                            <span class="text-muted">Business, Society, and Private Life</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Paper Format:</span>
                            <span class="text-muted">APA</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Discipline:</span>
                            <span class="text-muted">English</span>
                        </p>
                        <p class="fs-5">
                            <span class="fw-bolder">Pages:</span>
                            <span class="text-muted">6</span>
                        </p>
                        <a class="btn btn-primary" target="_blank" href="{{ '/samples/BUSINESS.pdf' }}">Read
                            sample</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>
@endsection