<div>
    <div class="row">
        <!-- Sidebar Section -->
        <div class="col-md-3">
            @if ($category->brands)
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Brands</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($category->brands as $item)
                            <label class="d-block">
                                <input type="checkbox" wire:model="brandInputs" value="{{ $item->name }}">
                                {{ $item->name }}
                            </label>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Price</h5>
                </div>
                <div class="card-body">
                    <label class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low"> High to Low
                    </label>
                    <label class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high"> Low to High
                    </label>
                </div>
            </div>
        </div>

        <!-- Product Listing Section -->
        <div class="col-md-9">
            <div class="row">
                @forelse ($products as $productItem)
                    <div class="col-md-4 mb-4">
                        <div class="product-card shadow-sm">
                            <div class="product-card-img">
                                @if ($productItem->quantity > 0)
                                    <label class="stock bg-success">In Stock</label>
                                @else
                                    <label class="stock bg-danger">Out of Stock</label>
                                @endif

                                @if ($productItem->productImages->count() > 0)
                                    <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                        <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}" class="img-fluid">
                                    </a>
                                @endif
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $productItem->brand }}</p>
                                <h5 class="product-name">
                                    <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                        {{ $productItem->name }}
                                    </a>
                                </h5>
                                <div class="product-prices">
                                    <span class="selling-price">${{ $productItem->selling_price }}</span>
                                    <span class="original-price">${{ $productItem->original_price }}</span>
                                </div>
                                <div class="product-actions">
                                    <a href="#" class="btn-add-to-cart">Add to Cart</a>
                                    <a href="#" class="btn-add-to-wishlist">Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="p-2 text-center">
                            <h4>No Products Available For {{ $category->name }}!</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>