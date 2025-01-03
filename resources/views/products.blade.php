@extends('layouts.main')

@section('main-container')
<div class="container mt-5" style="color: white;">
    <h2 class="text-center">Products</h2>

    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-12 text-center">
            <!-- Search Input Field -->
            <input type="text" id="search-bar" class="form-control d-inline-block" placeholder="Search for products..." style="width: 40%; margin-right: 10px;">
        </div>
    </div>

    <!-- Product List -->
    <div class="row" id="product-list">
        @foreach($products as $product)
        <div class="col-md-4 mb-4 product-card" data-name="{{ strtolower($product->name) }}" data-category="{{ strtolower($product->category) }}">
            <div class="card">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Category: {{ $product->category }}</p>
                    <p class="card-text">Genre: {{ $product->genre }}</p>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: ${{ $product->price }}</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#search-bar').on('keyup', function() {
            let query = $(this).val();
            if (query.length > 0) {
                // Perform the AJAX request
                $.ajax({
                    url: '{{ route('products.search') }}', // Ensure the correct route
                    method: 'GET',
                    data: { query: query },
                    success: function(response) {
                        // Update the product list with the filtered products
                        $('#product-list').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                // Clear the results when the search bar is empty
                $('#product-list').html('');
            }
        });
    });
</script>
@endpush
@endsection
