<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <title>@yield('page_title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">
    <!--link rel="stylesheet" href="{{ bagisto_asset('css/shop.css') }}" -->
    <link rel="stylesheet" href="{{ bagisto_asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/jquery.simpleGallery.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/jquery.simpleLens.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/webkul/ui/assets/css/ui.css') }}">

    @if ($favicon = core()->getCurrentChannel()->favicon_url)
        <link rel="icon" sizes="16x16" href="{{ $favicon }}" />
    @else
        <link rel="icon" sizes="16x16" href="{{ bagisto_asset('images/favicon.ico') }}" />
    @endif

    @yield('head')

    @section('seo')
        <meta name="description" content="{{ core()->getCurrentChannel()->description }}"/>
    @show

    @stack('css')

    {!! view_render_event('bagisto.shop.layout.head') !!}

</head>

<body @if (app()->getLocale() == 'ar') class="rtl" @endif style="scroll-behavior: smooth;">

    {!! view_render_event('bagisto.shop.layout.body.before') !!}

    <div class="page-1" id="app">
        <flash-wrapper ref='flashes'></flash-wrapper>

        <div class="">

            {!! view_render_event('bagisto.shop.layout.header.before') !!}

            @include('shop::layouts.header.index')

            {!! view_render_event('bagisto.shop.layout.header.after') !!}

            @yield('slider')

            <div class="content-container">

                {!! view_render_event('bagisto.shop.layout.content.before') !!}

                @yield('content-wrapper')

                {!! view_render_event('bagisto.shop.layout.content.after') !!}

            </div>

        </div>

        {!! view_render_event('bagisto.shop.layout.footer.before') !!}

        @include('shop::layouts.footer.footer')

        {!! view_render_event('bagisto.shop.layout.footer.after') !!}

        <div class="footer-bottom">
            <p>
                @if (core()->getConfigData('general.content.footer.footer_content'))
                    {{ core()->getConfigData('general.content.footer.footer_content') }}
                @else
                    {{ trans('admin::app.footer.copy-right') }}
                @endif
            </p>
        </div>

    </div>

    <script type="text/javascript">
        window.flashMessages = [];

        @if ($success = session('success'))
            window.flashMessages = [{'type': 'alert-success', 'message': "{{ $success }}" }];
        @elseif ($warning = session('warning'))
            window.flashMessages = [{'type': 'alert-warning', 'message': "{{ $warning }}" }];
        @elseif ($error = session('error'))
            window.flashMessages = [{'type': 'alert-error', 'message': "{{ $error }}" }
            ];
        @elseif ($info = session('info'))
            window.flashMessages = [{'type': 'alert-info', 'message': "{{ $info }}" }
            ];
        @endif

        window.serverErrors = [];
        @if(isset($errors))
            @if (count($errors))
                window.serverErrors = @json($errors->getMessages());
            @endif
        @endif
    </script>

    <script type="text/javascript" src="{{ bagisto_asset('js/shop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/webkul/ui/assets/js/ui.js') }}"></script>

        <!-- jquery latest version -->
        <script src="{{ bagisto_asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
		<!-- bootstrap js -->
        <script src="{{ bagisto_asset('js/bootstrap.min.js') }}"></script>
		<!-- owl.carousel js -->
        <script src="{{ bagisto_asset('js/owl.carousel.min.js') }}"></script>
		<!-- meanmenu.js -->
        <script src="{{ bagisto_asset('js/jquery.meanmenu.js') }}"></script>
		<!-- nivo.slider.js -->
        <script src="{{ bagisto_asset('lib/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
        <script src="{{ bagisto_asset('lib/home.js') }}" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="{{ bagisto_asset('js/jquery-ui.min.js') }}"></script>
		<!-- scrollUp.min.js -->
        <script src="{{ bagisto_asset('js/jquery.scrollUp.min.js') }}"></script>
		<!-- jquery.parallax.js -->
        <script src="{{ bagisto_asset('js/jquery.parallax.js') }}"></script>
		<!-- sticky.js -->
        <script src="{{ bagisto_asset('js/jquery.sticky.js') }}"></script>
        <!-- jquery.simpleGallery.min.js -->
        <script src="{{ bagisto_asset('js/jquery.simpleGallery.min.js') }}"></script>
        <script src="{{ bagisto_asset('js/jquery.simpleLens.min.js') }}"></script>
		<!-- countdown.min.js -->
        <script src="{{ bagisto_asset('js/jquery.countdown.min.js') }}"></script>
        <!-- isotope.pkgd.min -->
        <script src="{{ bagisto_asset('js/isotope.pkgd.min.js') }}"></script>
		<!-- wow js -->
        <script src="{{ bagisto_asset('js/wow.min.js') }}"></script>
		<!-- plugins js -->
        <script src="{{ bagisto_asset('js/plugins.js') }}"></script>
		<!-- main js -->
        <script src="{{ bagisto_asset('js/main.js') }}"></script>

    @stack('scripts')

    {!! view_render_event('bagisto.shop.layout.body.after') !!}

    <div class="modal-overlay"></div>

</body>

</html>