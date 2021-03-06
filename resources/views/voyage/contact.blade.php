<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>CITY Real Estate - Responsive HTML5 Landing Page Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="realestate_version">

<!-- LOADER -->
<div id="preloader">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
<!-- end loader -->
<!-- END LOADER -->

@include('voyage.partials._header')

<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Reservation</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="{{ route('index') }}">Voyage</a></li>
                        <li>Reservation</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div id="support" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Faites votre reservation</h3>

            <p class="lead">Let us give you more details about the special offer website you want us. Please fill out
                the form below. <br>We have million of website owners who happy to work with us!</p>
        </div>
        <!-- end title -->

        <div class="row">
            <div class="col-md-6">
                <div class="contact_form">
                    <div id="message"></div>
                    <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                        <fieldset class="row-fluid">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                       placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="last_name" id="last_name" class="form-control"
                                       placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="Your Email">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" id="phone" class="form-control"
                                       placeholder="Your Phone">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label class="sr-only">Select Time</label>
                                <select name="select_service" id="select_service" class="selectpicker form-control"
                                        data-style="btn-white">
                                    <option value="selecttime">Select Time</option>
                                    <option value="Weekdays">Weekdays</option>
                                    <option value="Weekend">Weekend</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label class="sr-only">What is max price?</label>
                                <select name="select_price" id="select_price" class="selectpicker form-control"
                                        data-style="btn-white">
                                    <option value="$100 - $2000">$100 - $2000</option>
                                    <option value="$2000 - $4000">$2000 - $4000</option>
                                    <option value="$4000 - $10000">$4000 - $10000</option>
                                </select>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" name="comments" id="comments" rows="6"
                                          placeholder="Give us more details.."></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block">Get Appointment
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="right-box-contact">
                    <h4>Phone</h4>

                    <div class="support-info">
                        <div class="info-title">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            + 11 2839 9988
                            <span>Booking Time: 0900 – 2000 Hrs</span>
                        </div>
                    </div>
                </div>
                <div class="right-box-contact">
                    <h4>Address</h4>

                    <div class="support-info">
                        <div class="info-title">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Address
                            <span>PO Box 16122 Collins Street West Victoria 8007 Australia</span>
                        </div>
                    </div>
                </div>
                <div class="right-box-contact">
                    <h4>Your Feedback</h4>

                    <div class="support-info">
                        <div class="info-title">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            info@yoursite.com
                            <span>Help Us Improve!</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end section -->

<!-- end footer -->
@include('voyage.partials._footer')

</body>
</html>