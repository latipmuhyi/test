@extends('Header.master')
@section('content')
    <div>
        <style>
            .carousel-item {
                height: 50vh;
                /* Adjust height as needed */
            }

            .carousel-item svg {
                height: 100%;
            }

            .carousel-inner {
                height: 100%;
            }
        </style>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image href="{{ asset('images/carousel1.jpg') }}" width="100%" height="135vh"
                            style="background-size: cover" />
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Masakan Lezat dan Bergizi</h1>
                            <p class="opacity-75">Nikmati hidangan istimewa kami yang tidak hanya lezat tetapi juga sehat
                                dan bergizi.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Daftar sekarang</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image href="{{ asset('images/carousel2.jpg') }}" width="100%" height="135vh"
                            style="background-size: cover" />
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Pelayanan Catering Profesional</h1>
                            <p>Kami menyediakan layanan catering yang berkualitas dengan menu pilihan dan pelayanan yang
                                ramah.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Pelajari lebih lanjut</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image href="{{ asset('images/carousel3.jpg') }}" width="100%" height="135vh"
                            style="background-size: cover" />
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Paket Spesial untuk Acara Anda</h1>
                            <p>Nikmati paket catering spesial kami untuk acara istimewa Anda, disiapkan dengan cinta dan
                                perhatian.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Jelajahi galeri</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the
                        first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second
                        column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span
                            class="text-body-secondary">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                        prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                            fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span
                            class="text-body-secondary">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of
                        how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                            fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                            class="text-body-secondary">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                        really intended to be actually read, simply here to give you a better view of what this would look
                        like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                            fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>
    </div>
@endsection
