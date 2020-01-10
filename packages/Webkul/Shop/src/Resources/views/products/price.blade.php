{!! view_render_event('bagisto.shop.products.price.after', ['product' => $product]) !!}


{!! view_render_event('bagisto.shop.products.price.before', ['product' => $product]) !!}
<div class="pro-price">
    @inject ('priceHelper', 'Webkul\Product\Helpers\Price')

    @if ($product->type == 'configurable')
        <span class="price-text">{{ __('shop::app.products.price-label') }}</span>

        <span class="final-price">{{ core()->currency($priceHelper->getMinimalPrice($product)) }}</span>
    @else
        @if ($priceHelper->haveSpecialPrice($product))
            <!--div class="sticker sale">
                {{ __('shop::app.products.sale') }}
            </div-->
            <span class="normal-price">{{ core()->currency($priceHelper->getSpecialPrice($product)) }}</span>
            <span class="old-price">{{ core()->currency($product->price) }}</span>
        @else
            <span class="normal-price">{{ core()->currency($product->price) }}</span>
        @endif
    @endif
</div>
{!! view_render_event('bagisto.shop.products.price.after', ['product' => $product]) !!}