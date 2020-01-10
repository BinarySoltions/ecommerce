@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

<?php $cart = cart()->getCart(); ?>

@if ($cart)
    @php
        Cart::collectTotals();
    @endphp

    <?php $items = $cart->items; ?>

     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <ul class="header-cart-wrap">
            <li><a class="cart" href="#">{{ __('shop::app.header.cart') }}: {{ $cart->items->count() }} items</a>
                <div class="mini-cart-content">
                    <div class="cart-products-list">
                        @foreach ($items as $item)
                        <div class="sing-cart-pro">
                            <?php
                            if ($item->type == "configurable")
                                $images = $productImageHelper->getProductBaseImage($item->child->product);
                            else
                                $images = $productImageHelper->getProductBaseImage($item->product);
                        ?>
                            <div class="cart-image">
                                <a href="#"><img src="{{ $images['small_image_url'] }}" alt=""></a>
                            </div>
                            <div class="cart-product-info">
                                {!! view_render_event('bagisto.shop.checkout.cart-mini.item.name.before', ['item' => $item]) !!}
                                <a href="#" class="product-name"> {{ $item->name }} </a>
                                {!! view_render_event('bagisto.shop.checkout.cart-mini.item.name.after', ['item' => $item]) !!}


                                {!! view_render_event('bagisto.shop.checkout.cart-mini.item.options.before', ['item' => $item]) !!}

                                @if ($item->type == "configurable")
                                    <div class="item-options">
                                        {{ trim(Cart::getProductAttributeOptionDetails($item->child->product)['html']) }}
                                    </div>
                                @endif
                                    {!! view_render_event('bagisto.shop.checkout.cart-mini.item.options.after', ['item' => $item]) !!}


                                
                                <div class="cart-price">
                                


                                    {!! view_render_event('bagisto.shop.checkout.cart-mini.item.quantity.before', ['item' => $item]) !!}
                                    <span class="quantity"><strong> {{ $item->quantity }} x</strong></span>
                                    {!! view_render_event('bagisto.shop.checkout.cart-mini.item.quantity.after', ['item' => $item]) !!}
                                    
                                    {!! view_render_event('bagisto.shop.checkout.cart-mini.item.price.before', ['item' => $item]) !!}								
                                    <span class="p-price">{{ core()->currency($item->base_total) }}</span>
                                    {!! view_render_event('bagisto.shop.checkout.cart-mini.item.price.after', ['item' => $item]) !!}
                                </div>
                                <a class="edit-pro" title="edit"><i class="fa fa-pencil-square-o"></i></a>
                                <a class="remove-pro" title="remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="cart-price-list">
                        <p class="price-amount"><span class="cart-subtotal">{{ __('shop::app.checkout.cart.cart-subtotal') }} :</span>
                            {!! view_render_event('bagisto.shop.checkout.cart-mini.subtotal.before', ['cart' => $cart]) !!}
                                <span>{{ core()->currency($cart->base_sub_total) }}</span>
                                {!! view_render_event('bagisto.shop.checkout.cart-mini.subtotal.after', ['cart' => $cart]) !!}
                        </p>
                        <div class="cart-checkout">
                            <a href="{{ route('shop.checkout.onepage.index') }}">{{ __('shop::app.minicart.checkout') }}</a>
                        </div>
                        <div class="view-cart">
                            <a href="{{ route('shop.checkout.cart.index') }}">{{ __('shop::app.minicart.view-cart') }}</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

@else
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <ul class="header-cart-wrap">
        <li><a class="cart" href="#">{{ __('shop::app.header.cart') }}: 0 item</a>
            <div class="mini-cart-content">
                <div class="cart-products-list">
                    <span class="name">{{ __('shop::app.minicart.cart') }}<span class="count"> ({{ __('shop::app.minicart.zero') }}) </span></span>
                </div>
            </div>
        </li>
    </ul>
</div>
@endif