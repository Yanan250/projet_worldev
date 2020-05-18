<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Trajet</title>
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
                <h2>{{ $last->ville_depart }}</h2>

                <h2>{{ $last->ville_arrivee }}</h2>

                <h2>{{ $last->date_voyage }}</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Voyage</a></li>
                        <li>Trajet</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div id="features" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
                <h3>Selectionnez votre trajet</h3>
            </div>
            <!-- end col -->
        </div>
        <!-- end title -->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-widget">
                    <div class="property-main">
                        <div class="property-wrap">
                            <figure class="post-media wow fadeIn">
                                <a href="uploads/estate_01.jpg" data-rel="prettyPhoto[gal]"
                                   class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                <img src="uploads/estate_01.jpg" alt="" class="img-responsive">

                                <div class="label-inner">
                                    <span class="label-status label">Popular</span>
                                </div>
                                <div class="price">
                                    <span class="item-sub-price">3000 F CFA</span>
                                </div>
                            </figure>
                            <div class="item-body">
                                <h3>UTS TRANSPORT</h3>

                                <div class="info">
                                    <p><span>11h - 13h30</span>

                                    <p><span>Duree: 2h30</span></p>

                                    <p>Depart a Adjame Nouvelle Gare</p>
                                </div>
                                <div class="adderess">
                                    <i class="fa fa-map-pin" aria-hidden="true"></i>
                                    334, Rock Hill, New York, Mississippi, 12775, USA
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <div class="pull-left">
								<span class="prop-user-agent">
									<i class="fa fa-user" aria-hidden="true"></i>
									john S.Allen
								</span>
                            </div>
                            <div class="pull-right">
								<span class="prop-date">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									9 months ago
								</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end service -->
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-widget">
                    <div class="property-main">
                        <div class="property-wrap">
                            <figure class="post-media wow fadeIn">
                                <a href="uploads/estate_03.jpg" data-rel="prettyPhoto[gal]"
                                   class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                <img src="uploads/estate_03.jpg" alt="" class="img-responsive">

                                <div class="label-inner">
                                    <span class="label-status label">Popular</span>
                                </div>
                                <div class="price">
                                    <span class="item-sub-price">$5.550/sq ft</span>
                                </div>
                            </figure>
                            <div class="item-body">
                                <h3>With its Own Pool</h3>

                                <div class="info">
                                    <p><span>Bedroom: 2</span> <span>Bathroom: 2</span> <span>Land Size: <span
                                                    class="estate-x-size">3000</span> <span
                                                    class="estate-x-unit">square</span></span>
                                        <span>Building Size: <span class="estate-x-size">1400</span> <span
                                                    class="estate-x-unit">square</span></span></p>

                                    <p>House</p>
                                </div>
                                <div class="adderess">
                                    <i class="fa fa-map-pin" aria-hidden="true"></i>
                                    804, Rock Hill, New York, Mississippi, 12785, USA
                                </div>
                            </div>
                            <div class="item-foot">
                                <div class="pull-left">
									<span class="prop-user-agent">
										<i class="fa fa-user" aria-hidden="true"></i>
										john S.Allen
									</span>
                                </div>
                                <div class="pull-right">
									<span class="prop-date">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										9 months ago
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end service -->
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-widget">
                    <div class="property-main">
                        <div class="property-wrap">
                            <figure class="post-media wow fadeIn">
                                <a href="uploads/estate_02.jpg" data-rel="prettyPhoto[gal]"
                                   class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                <img src="uploads/estate_02.jpg" alt="" class="img-responsive">

                                <div class="label-inner">
                                    <span class="label-status label">Popular</span>
                                </div>
                                <div class="price">
                                    <span class="item-sub-price">$5.550/sq ft</span>
                                </div>
                            </figure>
                            <div class="item-body">
                                <h3>In Forests- Fresh Clean Air</h3>

                                <div class="info">
                                    <p><span>Bedroom: 3</span> <span>Bathroom: 2</span> <span>Land Size: <span
                                                    class="estate-x-size">4000</span> <span
                                                    class="estate-x-unit">square</span></span>
                                        <span>Building Size: <span class="estate-x-size">2000</span> <span
                                                    class="estate-x-unit">square</span></span></p>

                                    <p>House</p>
                                </div>
                                <div class="adderess">
                                    <i class="fa fa-map-pin" aria-hidden="true"></i>
                                    904, Rock Hill, New York, Mississippi, 12705, USA
                                </div>
                            </div>
                            <div class="item-foot">
                                <div class="pull-left">
									<span class="prop-user-agent">
										<i class="fa fa-user" aria-hidden="true"></i>
										john S.Allen
									</span>
                                </div>
                                <div class="pull-right">
									<span class="prop-date">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										9 months ago
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end service -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

@include('voyage.partials._footer')

</body>
</html>