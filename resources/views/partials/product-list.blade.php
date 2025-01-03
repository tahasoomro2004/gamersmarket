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
