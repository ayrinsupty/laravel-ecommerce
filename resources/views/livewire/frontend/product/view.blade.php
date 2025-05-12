<div>
    <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <!-- Product Image Section -->
                <div class="col-md-3 mt-3">
                    <div class="product-image-container shadow-sm" wire:ignore>
                        @if ($product->productImages)
                            <div class="exzoom" id="exzoom">
                                <div class="exzoom_img_box">
                                    <ul class="exzoom_img_ul">
                                        @foreach ($product->productImages as $itemImg)
                                            <li><img src="{{ asset($itemImg->image) }}" alt="Product Image"></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="exzoom_nav"></div>
                                <p class="exzoom_btn">
                                    <a href="javascript:void(0);" class="exzoom_prev_btn"><</a>
                                    <a href="javascript:void(0);" class="exzoom_next_btn">></a>
                                </p>
                            </div>
                        @else
                            <p class="text-center">No Image Available</p>
                        @endif
                    </div>
                </div>

                <!-- Product Details Section -->
                <div class="col-md-7 mt-3">
                    <div class="product-details">
                        <h4 class="product-name">{{ $product->name }}</h4>
                        <hr>
                        <p class="product-path">Home / {{ $product->category->name }} / {{ $product->name }}</p>
                        <div class="product-description mt-3">
                            <h5>Small Description</h5>
                            <p>{!! $product->small_description !!}</p>
                        </div>
                        <div class="product-prices">
                            <span class="selling-price">${{ $product->selling_price }}</span>
                            <span class="original-price">${{ $product->original_price }}</span>
                        </div>

                        <div class="product-stock mt-3">
                            @if ($product->productColors->count() > 0)
                                @foreach ($product->productColors as $colorItem)
                                    <label class="color-selection"
                                        style="background-color: {{ $colorItem->color->code }};"
                                        wire:click="colorSelected({{ $colorItem->id }})">
                                        {{ $colorItem->color->name }}
                                    </label>
                                @endforeach
                                <div>
                                    @if ($this->prodColorSelectedQuantity == 'outOfStock')
                                        <label class="btn btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
                                    @elseif ($this->prodColorSelectedQuantity > 0)
                                        <label class="btn btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                                    @endif
                                </div>
                            @else
                                @if ($product->quantity > 0)
                                    <label class="btn btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                                @else
                                    <label class="btn btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
                                @endif
                            @endif
                        </div>

                        <div class="quantity-control mt-3">
                            <div class="input-group">
                                <span class="input-group-text">Quantity</span>
                                <span class="btn btn1" wire:click="quantityDecrement"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" readonly class="input-quantity" />
                                <span class="btn btn1" wire:click="quantityIncrement"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>

                        <div class="product-actions mt-3 d-flex justify-content-start">
                            <button type="button" wire:click="addToCart({{ $product->id }})" class="btn-view-more">
                                <span wire:loading.remove wire:target="addToCart">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </span>
                                <span wire:loading wire:target="addToCart">Adding...</span>
                            </button>
                            <button type="button" wire:click="addToWishlist({{ $product->id }})" class="btn-view-more">
                                <span wire:loading.remove wire:target="addToWishlist">
                                    <i class="fa fa-heart"></i> Add To Wishlist
                                </span>
                                <span wire:loading wire:target="addToWishlist">Adding...</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products Section -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <h3>Related Products</h3>
                    <div class="underline"></div>
                </div>
                @forelse ($category->relatedProducts as $relatedProductItem)
                    <div class="col-md-3 mb-3">
                        <div class="product-card shadow-sm">
                            <div class="product-card-img">
                                @if ($relatedProductItem->productImages->count() > 0)
                                    <a href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">
                                        <img src="{{ asset($relatedProductItem->productImages[0]->image) }}" alt="{{ $relatedProductItem->name }}">
                                    </a>
                                @endif
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $relatedProductItem->brand }}</p>
                                <h5 class="product-name">
                                    <a href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">
                                        {{ $relatedProductItem->name }}
                                    </a>
                                </h5>
                                <div class="product-prices">
                                    <span class="selling-price">${{ $relatedProductItem->selling_price }}</span>
                                    <span class="original-price">${{ $relatedProductItem->original_price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <p class="text-center">No Related Products Available!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(function() {
                $("#exzoom").exzoom({
                    "navWidth": 60,
                    "navHeight": 60,
                    "navItemNum": 5,
                    "navItemMargin": 7,
                    "navBorder": 1,
                    "autoPlay": false,
                    "autoPlayTimeout": 2000
                });
            });
        </script>
    @endpush
</div>