@extends('layouts.main')

@section('main-container')
    <style>
        /* Styles for the carousel section */
        #posters_section {
            margin-top: 0;
            overflow: hidden;
            position: relative;
            height: 600px;
            max-width: 100%;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        footer {
            margin-top: 40px;
        }
    </style>

    <!-- Slider Section -->
    <section id="posters_section" class="container my-5">
        <div id="gameCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('wukong1.jpg') }}" class="d-block w-100" alt="Wukong 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('ghost.jpg') }}" class="d-block w-100" alt="Ghost">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('for_honor.jpg') }}" class="d-block w-100" alt="For Honor">
                </div>
            </div>
            <!-- Slider Controls -->
            <a class="carousel-control-prev" href="#gameCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#gameCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <div class="text-center mt-4" style="color: white;">
        <h4>Welcome to Gamers Market</h4>
        <p>Happy gaming !!</p>
    </div>
@endsection
