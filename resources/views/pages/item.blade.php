@extends('Layout.layoutitem')

@section('header')
    <h1 class="display-3 text-white mb-3 animated slideInDown">Cosplay Details</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Cosplay Details</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <!-- Product Image Section -->
            <div class="col-lg-6">
                <div class="product-image">
                    <img src="/storage/{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid rounded shadow">
                </div>
            </div>
            
            <!-- Product Details Section -->
            <div class="col-lg-6">
                <div class="product-details">
                    <h2 class="display-5">{{ $product->name }}</h2>
                    <p class="fs-4 text-danger mb-3">Rs.{{ number_format($product->price, 2) }}</p>
                    <div class="ratings mb-3">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi {{ $i < $product->rating ? 'bi-star-fill' : 'bi-star' }} text-warning"></i>
                        @endfor
                        <span class="text-muted ms-2">({{ $product->rating }} reviews)</span>
                    </div>
                    <p class="mb-4">{{ $product->description }}</p>
                    
                    <!-- Quantity Selection -->
                    <div class="mb-4">
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1" class="form-control w-25 d-inline">
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="d-flex">
                        <a href="{{ route('cart.index') }}" class="btn btn-success btn-lg me-2">Proceed to Checkout</a>
                    </div>
                    
                    <!-- Additional Product Info -->
                    <div class="mt-4">
                        <h5>Product Details:</h5>
                        <ul class="list-unstyled">
                            <li><strong>Category:</strong>Cosplay</li>
                            <li><strong>Available Stock:</strong>In Stock</li>
                            <li><strong>SKU:</strong>SKU-0908</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Product Reviews Section -->
        <div class="row mt-5">
            <div class="col">
                <h3>Customer Reviews</h3>
                <hr>
                <div class="review">
                    <!-- Example Review -->
                    <p><strong>John Doe</strong> <span class="text-warning">★★★★☆</span></p>
                    <p class="mb-0">Comic Craze's cosplay service is absolutely top-notch! They helped me with a custom cosplay order, and the attention to detail was incredible. The team quickly understood my vision and executed it flawlessly. My cosplay looks amazing, and I can't wait to show it off at the next convention!</p>
                </div>
                <!-- Add more reviews as needed -->
            </div>
        </div>
    </div>
@endsection




