

@if (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts()->count())
<!-- Start-featured-area-->
<div class="featured-product-wrap padding-t padding-dis">
    <div class="container">
        <!-- section-heading start -->
        <div class="section-heading">
            <h3><span class="h-color">{{ __('shop::app.home.featured-products') }}</span> PRODUCTS</h3>
        </div>
        <!-- section-heading end -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="features-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Men</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">women</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Clothes</a></li>
                        <li role="presentation"><a href="#section" aria-controls="messages" role="tab" data-toggle="tab">Kids</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!--start-home-section-->
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="featured-carousel indicator">
                                    
                                @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)

                                @include ('shop::products.list.card', ['product' => $productFlat])

                                @endforeach
                                                                
                                </div>
                            </div>
                        </div>
                        <!--end-messages-section-->
                        <!--start-section-section-->
                        <div role="tabpanel" class="tab-pane" id="section">
                            <div class="row">
                                <div class="featured-carousel indicator">
                                    <!-- Start-single-product -->
                                    <div class="col-lg-3">
                                        <div class="single-product">
                                        <div class="sale">Sale</div>
                                        <div class="new">new</div>
                                        <div class="sale-border"></div>
                                            <div class="product-img-wrap">
                                                <a class="product-img" href="#"> <img src="images/product/44.jpg" alt="product-image" /></a>
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
                                                    <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                    <div class="pro-rating">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="price-text">Price:</span>
                                                        <span class="normal-price">$90.00</span>
                                                        <span class="old-price"><del>$100.00</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="col-lg-3">
                                        <div class="single-product">
                                        <div class="new">new</div>
                                            <div class="product-img-wrap">
                                                <a class="product-img" href="#"> <img src="images/product/45.jpg" alt="product-image" /></a>
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
                                                    <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                    <div class="pro-rating">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="price-text">Price:</span>
                                                        <span class="normal-price">$200.00</span>
                                                        <span class="old-price"><del>$220.00</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="col-lg-3">
                                        <div class="single-product">
                                        <div class="new">sale</div>
                                            <div class="product-img-wrap">
                                                <a class="product-img" href="#"> <img src="images/product/47.jpg" alt="product-image" /></a>
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
                                                    <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                    <div class="pro-rating">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="price-text">Price:</span>
                                                        <span class="normal-price">$100.00</span>
                                                        <span class="old-price"><del>$120.00</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img-wrap">
                                                <a class="product-img" href="#"> <img src="images/product/48.jpg" alt="product-image" /></a>
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
                                                    <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                    <div class="pro-rating">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="price-text">Price:</span>
                                                        <span class="normal-price">$190.00</span>
                                                        <span class="old-price"><del>$210.00</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img-wrap">
                                                <a class="product-img" href="#"> <img src="images/product/46.jpg" alt="product-image" /></a>
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
                                                    <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                    <div class="pro-rating">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="price-text">Price:</span>
                                                        <span class="normal-price">$100.00</span>
                                                        <span class="old-price"><del>$120.00</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="col-lg-3">
                                        <div class="single-product">
                                        <div class="sale">Sale</div>
                                        <div class="sale-border"></div>
                                            <div class="product-img-wrap">
                                                <a class="product-img" href="#"> <img src="images/product/44.jpg" alt="product-image" /></a>
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
                                                    <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                    <div class="pro-rating">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star"></i></li>
                                                            <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="price-text">Price:</span>
                                                        <span class="normal-price">$140.00</span>
                                                        <span class="old-price"><del>$170.00</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                            </div>
                        </div>
                        <!--end-section-section-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End-featured-area-->

@endif