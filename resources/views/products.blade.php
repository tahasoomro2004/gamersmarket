@extends('layouts.main')

@section('main-container')
    <div class="container mt-5" style="color: white;">
        <h2 class="text-center">Products</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('wukong portrait.jpg') }}" class="card-img-top" alt="Game 1">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('gta 6.jpg') }}" class="card-img-top" alt="Game 2">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('witcher3.jpg') }}" class="card-img-top" alt="Game 3">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('uncherted4.jpg') }}" class="card-img-top" alt="Game 4">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('cod infinite.jpg') }}" class="card-img-top" alt="Game 5">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images.jpeg') }}" class="card-img-top" alt="Game 6">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
