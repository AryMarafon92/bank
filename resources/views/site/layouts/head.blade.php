
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PFHHTQ9');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@section('title') {{{$title}}} @show</title>
    <meta name="description" content="{{{$description}}}">
    <meta name="keywords" content="">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="bank - Método de pagamento">
    <!-- <meta property="og:image" content="http://www.themezinho.net/wandau/preview.png"> -->
    <meta property="og:site_name" content="bank">
    <meta property="og:title" content="bank">
    <meta property="og:type" content="website">
    <!-- <meta property="og:url" content="http://www.themezinho.net/wandau"> -->

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@bank">
    <meta name="twitter:creator" content="@bank">
    <meta name="twitter:title" content="bank">
    <meta name="twitter:description" content="bank - Método de pagamento">
    <!-- <meta name="twitter:image" content="http://www.themezinho.net/wandau/preview.png"> -->

    <!-- FAVICON FILES -->
    <link href="{{ asset('favicon/apple-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ asset('favicon/apple-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('favicon/apple-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('favicon/apple-icon-57x57.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('favicon/favicon-96x96.png') }}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.bundle.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
    


@yield('styles')

@section('scripts')

    <script src="{{ asset('assets/js/jquery.min.js')}}"></script> 
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script> 
    <script src="{{ asset('assets/js/gsap.min.js')}}"></script> 
    <script src="{{ asset('assets/js/locomotive-scroll.min.js')}}"></script> 
    <script src="{{ asset('assets/js/ScrollTrigger.min.js')}}"></script> 
    <script src="{{ asset('assets/js/kinetic-slider.js')}}"></script> 
    <script src="{{ asset('assets/js/fancybox.min.js')}}"></script> 
    <script src="{{ asset('assets/js/odometer.min.js')}}"></script> 
    <script src="{{ asset('assets/js/swiper.min.js')}}"></script> 
    <script src="{{ asset('assets/js/scripts.js')}}"></script>

@stop