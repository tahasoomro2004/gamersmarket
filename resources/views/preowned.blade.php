@extends('layouts.main')

@section('main-container')
    <div class="container mt-5" style="color: white;">
        <h2 class="text-center">Pre-Owned Games</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('horizon.jpg') }}" class="card-img-top" alt="Game 1">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('forza.jpeg') }}" class="card-img-top" alt="Game 2">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('last of us.jpg') }}" class="card-img-top" alt="Game 3">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('GodofWarRagnarok.webp') }}" class="card-img-top" alt="Game 4">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('assassins.jpeg') }}" class="card-img-top" alt="Game 5">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('gta 5.jpeg') }}" class="card-img-top" alt="Game 6">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
