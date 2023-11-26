<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Emume - Real Estate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iconfont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- Modernizr JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

    <div id="main-wrapper">

        <!--Login & Register Section start-->
        <div
            class="login-register-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-12 ms-auto me-auto">

                        <ul class="login-register-tab-list nav">
                            <li><a class="active" href="#login-tab" data-bs-toggle="tab">Login</a></li>

                        </ul>

                        <div class="tab-content">
                            <div id="login-tab" class="tab-pane show active">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row">

                                        <!-- Email Address -->
                                        <div class="col-12 mb-30">
                                            <input id="email" type="email" name="email" placeholder="Email"
                                                required>
                                        </div>


                                        <!-- Password -->
                                        <div class="col-12 mb-30">
                                            <input id="password" name="password" type="password" placeholder="Password"
                                                required>
                                        </div>


                                        <div class="col-12 mb-30">
                                            <button class="btn rounded" type="submit">Login</button>
                                        </div>


                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Placed js at the end of the document so the pages load faster -->

        <!-- All jquery file included here -->
        <script
            src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM">
        </script>
        <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-1.4.1.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/map-place.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
