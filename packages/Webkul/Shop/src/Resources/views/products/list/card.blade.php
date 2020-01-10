

{!! view_render_event('bagisto.shop.products.list.card.after', ['product' => $product]) !!}

<!-- Start-single-product -->
<div class="col-lg-3">
    <div class="single-product">

    @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

    <?php $productBaseImage = $productImageHelper->getProductBaseImage($product); ?>
    
    @if ($product->new)
    <div class="new">{{ __('shop::app.products.new') }}</div>
    @endif
    <div class="sale-border"></div>
        <div class="product-img-wrap">
            <a href="{{ route('shop.products.index', $product->url_key) }}" title="{{ $product->name }}">
                <img src="{{ $productBaseImage['medium_image_url'] }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}'"/>
            </a>
            <div class="add-to-link">
                <a href="#">
                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                </a>
                <a data-toggle="modal" data-target="#productModal" href="#">
                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                </a>
                <a href="#">
                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                </a>
            </div>
            <div class="add-to-cart">
                <a href="#" title="add to cart">
                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                </a>
            </div>
        </div>
        <div class="product-info text-center">
            <div class="product-content">
                <a href="{{ url()->to('/').'/products/' . $product->url_key }}" title="{{ $product->name }}">
                    <h3 class="pro-name">{{ $product->name }}</h3>
                </a>
                <div class="pro-rating">
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li class="r-grey"><i class="fa fa-star"></i></li>
                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                    </ul>
                </div>
                @include ('shop::products.price', ['product' => $product])
            </div>
        </div>
    </div>
</div>
<!-- End-single-product -->