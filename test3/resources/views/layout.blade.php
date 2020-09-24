<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Guntur's Test 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="i/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,600,500,700,800,900|Open+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">
    <!-- Bootstrap 4.3.1 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- AOS 2.3.4 jQuery plugin CSS (Animations) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Nice select -->
    <link rel="stylesheet" href="assets/main/css/nice-select.css">
    <!-- Startup 3 CSS (Styles for all blocks) -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- Custom Css 2 -->
    <link href="assets/css/custom2.css" rel="stylesheet" />
</head>
<body>

    @include('header')
    <!-- Feature 40 -->

    @yield('container')
    <!-- Feature 5 -->

    <!-- Form 14 -->


    @include('footer')

    <!-- forms alerts -->
    {{-- <div class="alert alert-success alert-dismissible fixed-top alert-form-success" role="alert"> --}}
    {{--     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
    {{--     Thanks for your message! --}}
    {{-- </div> --}}
    {{-- <div class="alert alert-warning alert-dismissible fixed-top alert-form-check-fields" role="alert"> --}}
    {{--     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
    {{--     Please, fill in required fields. --}}
    {{-- </div> --}}
    {{-- <div class="alert alert-danger alert-dismissible fixed-top alert-form-error" role="alert"> --}}
    {{--     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
    {{--     <div class="message">An error occurred while sending data :( Please, check if your hosting supports PHP and check how to set form data sending <a href="https://designmodo.com/startup/documentation/#form-handler" target="_blank" class="link color-transparent-white">here</a>.</div> --}}
    {{-- </div> --}}

    <!-- gReCaptcha popup (uncomment if you need a recaptcha integration) -->
    <!--
<div class="bg-dark op-8 grecaptcha-overlay"></div>
<div class="bg-light radius10 w-350 h-120 px-20 pt-20 pb-20 grecaptcha-popup">
	<div class="w-full h-full d-flex justify-content-center align-items-center">
		<div id="g-recaptcha" data-sitekey="PUT_YOUR_SITE_KEY_HERE"></div>
	</div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script>
-->

    <!-- jQuery 1.12.1 -->
    {{-- <script src=assets/main/js/jquery-1.12.1.min.js"></script> --}}
    <script src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
    <!-- jQuery 3.3.1 -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}
    <!-- Bootstrap 4.3.1 JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- Google maps JS API -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
    <!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- AOS 2.3.4 jQuery plugin JS (Animations) -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <!-- Type It JS -->
    <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
    <!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <!-- Nice select -->
    <script src="assets/main/js/jquery.nice-select.min.js"></script>
    <!-- Startup 3 JS (Custom js for all blocks) -->
    <script src="assets/js/script.js"></script>
    <script>
        new TypeIt("#element", {
                speed: 60
                , loop: true
            , })
            .type("Representative")
            .pause(2000)
            .delete(14)
            .type("Advisor")
            .pause(2000)
            .delete(7)
            .type("Partner")
            .pause(2000)
            .delete(7)
            .type("Venture Capitalist")
            .pause(2000)
            .delete(18)
            .type("Distributor")
            .pause(2000)
            .delete(11)
            .go();

    </script>

</body>
</html>
