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

<section class="form padding_med" id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 d-none d-sm-block coverForm">
            </div>
            <div class="col-sm-12 col-lg-6 col-12">
                <div class="row justify-content-center">
                    <h2>Let's Connect</h2>
                </div>
                <div class="row justify-content-center" id="formLoading">
                    <div class="col-12 col-sm-10">
                        <form action="https://sinovgpl.com/form/submit" method="post" id="main-form" class="comment-form">
                            <input type="hidden" name="_token" value="s26SJ5ZtEj1rGT9bWHi0JJbeU9XHDw0je6UDrmCp">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input required="" type="text" name="name" placeholder="Name" class="form-control">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col">
                                    <input required="" type="text" placeholder="Phone" name="phone" class="form-control">
                                </div>
                                <div class="col">
                                    <input required="" type="email" placeholder="Email" name="email" class="form-control">
                                </div>
                            </div>
                            <input required="" type="text" placeholder="Email" name="page" value="landing" class="d-none form-control">
                            <div id="hcaptcha" data-sitekey="657e5f0b-51c2-4b2b-a16c-137c880b5e55" data-callback="onSubmit" data-size="invisible" class="h-captcha form-group row mb-1">
                                <div class="col-sm-12">
                                    <select class="form-control nice-select wide" name="formType" id="formType" style="display: none;">
                                        <option value="0" data-display="Select Form">Select Below</option>
                                        <option id="selectThis" value="FOR5e676a2321b18">General Enquiry</option>
                                    </select>
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current">Select Form</span><ul class="list"><li data-value="0" data-display="Select Form" class="option selected">Select Below</li><li data-value="FOR5e676a2321b18" class="option">General Enquiry</li></ul></div>
                                </div>
                            <iframe src="https://assets.hcaptcha.com/captcha/v1/fac4185/static/hcaptcha-checkbox.html#id=0v43qmjy6q6&amp;host=sinovgpl.com&amp;sentry=true&amp;reportapi=https%3A%2F%2Faccounts.hcaptcha.com&amp;recaptchacompat=true&amp;sitekey=657e5f0b-51c2-4b2b-a16c-137c880b5e55&amp;size=invisible" title="widget containing checkbox for hCaptcha security challenge" tabindex="0" frameborder="0" scrolling="no" data-hcaptcha-widget-id="0v43qmjy6q6" data-hcaptcha-response="" style="display: none;"></iframe><textarea id="g-recaptcha-response-0v43qmjy6q6" name="g-recaptcha-response" style="display: none;"></textarea><textarea id="h-captcha-response-0v43qmjy6q6" name="h-captcha-response" style="display: none;"></textarea></div>
                            <div id="formContainer">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-none d-sm-block coverForm">
            </div>
        </div>
    </div>
</section>

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
