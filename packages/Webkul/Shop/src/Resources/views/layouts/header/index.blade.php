<header>
	 <?php
		$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
		$searchTerm = explode("?", $query);

		foreach($searchTerm as $term){
			if (strpos($term, 'term') !== false) {
				$serachQuery = $term;
			}
		}
	?>
	<div class="header-top-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="header-top-left">
						<!--Start-Header-language-->
						<div class="dropdown top-language-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-language dropdown-toggle" href="#"> <img src="{{ bagisto_asset('images/flag/e.png') }}" alt="language"> {{ app()->getLocale()}} <span class="caret"></span> </a>
							<ul class="dropdown-menu" role="menu">
								@foreach (core()->getCurrentChannel()->locales as $locale)
									@if(isset($serachQuery))
										<li role="presentation" {{ $locale->code == app()->getLocale() ? 'selected' : '' }}><a role="menuitem" href="?{{ $serachQuery }}?locale={{ $locale->code }}"><img src="{{ bagisto_asset('images/flag/e.png') }}" alt="language">{{ $locale->name }}</a></li>
									@else
										<li role="presentation" {{ $locale->code == app()->getLocale() ? 'selected' : '' }}><a role="menuitem" href="?locale={{ $locale->code }}"><img src="{{ bagisto_asset('images/flag/e.png') }}" alt="language">{{ $locale->name }}</a></li>
									@endif
								@endforeach
							</ul>
						</div>
						<!--End-Header-language-->
						<!--Start-Header-currency-->
						<div class="dropdown top-currency-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-currency dropdown-toggle" href="#"><span class="usd-icon"><i class="fa fa-usd"></i></span> {{ core()->getCurrentCurrencyCode() }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								
								 @foreach (core()->getCurrentChannel()->currencies as $currency)
									<li role="presentation">
										@if(isset($serachQuery))
											<a role="menuitem" href="?{{ $serachQuery }}?currency={{ $currency->code }}">{{ $currency->code }}</a>
										@else
											<a role="menuitem" href="?currency={{ $currency->code }}">{{ $currency->code }}</a>
										@endif
									</li>
								@endforeach
								
				
							</ul>
						</div>
						<!--End-Header-currency-->
						<!--Start-welcome-message-->
						<div class="welcome-mg hidden-xs"><span>Default Welcome Message!</span></div>
						<!--End-welcome-message-->
					</div>
				</div>
				<!-- Start-Header-links -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="header-top-right">
						
						<div class="top-link-wrap">
							<div class="single-link">
                            @auth('customer')
								<div class="my-account"><a href="{{ route('customer.profile.index') }}"><span class="">{{ __('shop::app.header.profile') }}</span></a></div>
								<div class="wishlist"><a href="{{ route('customer.wishlist.index') }}"><span class="">{{ __('shop::app.header.wishlist') }}</span></a></div>
								<div class="check"><a href="{{ route('shop.checkout.cart.index') }}"><span class="">{{ __('shop::app.header.cart') }}</span></a></div>
								<div class="logout"><a href="{{ route('customer.session.destroy') }}"><span  class="">{{ __('shop::app.header.logout') }}</span></a></div>
                            @endauth

                            <div class="login"><a href="{{ route('customer.register.index') }}"><span  class="">{{ __('shop::app.header.sign-in') }}</span></a></div>
							</div>
						</div>
						
					</div>
				</div>
				 <!-- End-Header-links -->
			</div>
		</div>
	</div>
	<!--Start-header-mid-area-->
	<div class="header-mid-wrap">
		<div class="container">
			<div class="header-mid-content">
				<div class="row">
					<!--Start-logo-area-->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="header-logo">
							<a href="index.html"><img src="{{ bagisto_asset('images/logo/1.png') }}" alt="OurStore"></a>
						</div>
					</div>
					<!--End-logo-area-->
					<!--Start-gategory-searchbox-->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div id="search-category-wrap">
							<form class="header-search-box" action="{{ route('shop.search.index') }}" method="GET">
								<div class="search-cat">
									<select class="category-items" name="category">
										<option>All Categories</option>
										<option>Men</option>
										<option>Women</option>
										<option>Jewellery</option>
										<option>Electronics</option>
										<option>Kid</option>
										<option>Bootees Bags</option>
										<option>Clothing</option>
										<option>Footwear</option>
										<option>T-Shirts</option>
										<option>Polo-Shirts</option>
									</select>
								</div>
								<input type="search" id="text-search" name="term" placeholder="{{ __('shop::app.header.search-text') }}" required>
								<button id="btn-search-category" type="submit">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
					</div>
					<!--End-gategory-searchbox-->
					{!! view_render_event('bagisto.shop.layout.header.cart-item.before') !!}

					<!--Start-cart-wrap-->
					@include('shop::checkout.cart.mini-cart')
					<!--End-cart-wrap-->
					{!! view_render_event('bagisto.shop.layout.header.cart-item.after') !!}
				</div>
			</div>
		</div>
	</div>
	<!--End-header-mid-area-->
	<!--Start-Mainmenu-area -->
	<div class="mainmenu-area hidden-sm hidden-xs">
		<div id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
						<div class="log-small"><a class="logo" href="index.html"><img alt="OurStore" src="images/logo/s.png"></a></div>
						<div class="mainmenu">
							<nav>
								@include('shop::layouts.header.nav-menu.navmenu')
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End-Mainmenu-area-->
	<!--Start-Mobile-Menu-Area -->
    <div class="mobile-menu-area visible-sm visible-xs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="mobile-menu">
						<nav id="dropdown">
							@include('shop::layouts.header.nav-menu.navmenu')
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End-Mobile-Menu-Area -->
</header>
<!--End-Header-area-->

@push('scripts')
    <script>
        $(document).ready(function() {

            $('body').delegate('#search, .icon-menu-close, .icon.icon-menu', 'click', function(e) {
                toggleDropdown(e);
            });

            function toggleDropdown(e) {
                var currentElement = $(e.currentTarget);

                if (currentElement.hasClass('icon-search')) {
                    currentElement.removeClass('icon-search');
                    currentElement.addClass('icon-menu-close');
                    $('#hammenu').removeClass('icon-menu-close');
                    $('#hammenu').addClass('icon-menu');
                    $("#search-responsive").css("display", "block");
                    $("#header-bottom").css("display", "none");
                } else if (currentElement.hasClass('icon-menu')) {
                    currentElement.removeClass('icon-menu');
                    currentElement.addClass('icon-menu-close');
                    $('#search').removeClass('icon-menu-close');
                    $('#search').addClass('icon-search');
                    $("#search-responsive").css("display", "none");
                    $("#header-bottom").css("display", "block");
                } else {
                    currentElement.removeClass('icon-menu-close');
                    $("#search-responsive").css("display", "none");
                    $("#header-bottom").css("display", "none");
                    if (currentElement.attr("id") == 'search') {
                        currentElement.addClass('icon-search');
                    } else {
                        currentElement.addClass('icon-menu');
                    }
                }
            }
        });
    </script>
@endpush
