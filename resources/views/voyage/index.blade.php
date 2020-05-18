<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Reserver chap chap</title>
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
@include('voyage.partials._header')
<ul class='slideshow'>
    <li>
        <span>Summer</span>
    </li>
    <li>
        <span>Fall</span>
    </li>
    <li>
        <span>Winter</span>
    </li>
    <li>
        <span>Spring</span>
    </li>
</ul>

<div class="parallax first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
                <div class="contact_form">
                    <h3><i class="fa fa-envelope-o grd1 global-radius"></i> RESERVER CHAP CHAP</h3>

                    <form action="{{ route('create') }}" id="contactform1" class="row" name="contactform"
                          method="POST">
                        @csrf
                        <fieldset class="row-fluid">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label class="sr-only">Ville de départ</label>
                                <select name="select_depart" id="select_service1" class="selectpicker form-control"
                                        data-style="btn-white">
                                    <option value="selecttime">Ville de depart</option>
                                    <option value="Abengourou">Abengourou</option>
                                    <option value="Abidjan">Abidjan</option>
                                    <option value="Yamoussoukro">Yamoussoukro</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label class="sr-only">Ville d'arrivee</label>
                                <select name="select_arrivee" id="select_service1" class="selectpicker form-control"
                                        data-style="btn-white">
                                    <option value="selecttime">Ville d'arrivee</option>
                                    <option value="Abengourou">Abengourou</option>
                                    <option value="Abidjan">Abidjan</option>
                                    <option value="Yamoussoukro">Yamoussoukro</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="date" name="date_voyage" id="phone1" class="form-control"
                                       placeholder="Date de voyage">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" value="SEND" id="submit1"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block">Chercher
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="big-tagline clearfix">
                    <h2>Achetez votre ticket de car rapidement</h2>

                    <p class="lead">Voir l'interieurs des differents cars et le service a bord. </p>
                    <a data-scroll href="{{ route('gallery') }}" class="btn btn-light btn-radius grd1 btn-brd">Voir les
                        cars</a>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end section -->


<div class="about-box">
    <div class="container">
        <div class="row">
            <div class="top-feature owl-carousel owl-theme">
                <div class="item">
                    <div class="single-feature">
                        <div class="icon"><img src="uploads/icon-01.png" class="img-responsive" alt=""></div>
                        <h4><a href="#">Paiement Orange money, MTN Et Flooz</a></h4>

                        <p>Plus besoin de cash. Reglez votre achat de ticket directement sur mobile. Chap Chap est
                            disponible sur Orange Money, MTN Money et Flooz Money.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-feature">
                        <div class="icon"><img src="uploads/icon-02.png" class="img-responsive" alt=""></div>
                        <h4><a href="#">Un choix des transporteurs</a></h4>

                        <p>Pour vous simplifier la vie, nous allons chercher les horaires et les tarifs des differents
                            transporteurs partenaires. Vous pouvez donc comparer les horaires de departs et les
                            differents tarifs sans vous deplacer.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-feature">
                        <div class="icon"><img src="uploads/icon-03.png" class="img-responsive" alt=""></div>
                        <h4><a href="#">Une equipe pour vous acompagner</a></h4>

                        <p>A la gare, reperez les agents de la gare. Ils s'assurent de votre montée dans le car, du
                            respect de la disponibilite de votre place et veillent a ce que vos bagages vous suivent
                            juqu'a destination.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-feature">
                        <div class="icon"><img src="uploads/icon-04.png" class="img-responsive" alt=""></div>
                        <h4><a href="#">Votre place garantie</a></h4>

                        <p>Soyez le vip de votre prochain trajet en car. Fini les heures d'attentes, les bousculades et
                            brouhaha
                            a la gare routiere.
                            Achetez votre plce depuis internet avec votre pc ou votre telephone, votre place est
                            garantie. </p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-feature">
                        <div class="icon"><img src="uploads/icon-04.png" class="img-responsive" alt=""></div>
                        <h4><a href="#">Un gain de temps considerable</a></h4>

                        <p>Notre plateforme est disponible 7jours/7; 24h/24; 365jours/an. Il vous faudra bien 60
                            secondes pour reserver votre ticket de car. Soi-xante-te secondes!! </p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr1">
    </div>
</div>
<!-- les questions frequemment posee-->
<div id="testimonials" class="section lb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
                <h3>Questions frequemment posees</h3>
            </div>
            <!-- end col -->
        </div>
        <!-- end title -->

        <div id="Faq">&nbsp;</div>
        <div class="wrapp-faq container">
            <div class="row">
                <div class="col-sm-6 faq-det">
                    <h3 class="faq">Comment vais-je recevoir mon ticket de car ?</h3>

                    <p>
                        Juste apres achat, nous vous enverrons un SMS contenant un resume de trajet ainsi qu'un code
                        secret.
                        <br> Ce code secret est la preuve de votre achat, il vous sera demande le jour du depart.
                        Nous vous enverrons egalement un email recapitulatif de votre commande.
                    </p>

                </div>
                <div class="col-sm-6 faq-det">
                    <h3 class="faq">Est-ce que le billet coute plus cher ?</h3>

                    <p>
                        Pas du tout! Au contraire, nous faisons tres souvent des promotions avec des prix moins cher
                        qu'en gare !</a>
                    </p>
                </div>
            </div>
            <!-- /row -->

            <div class="row">
                <div class="col-sm-6 faq-det">
                    <h3 class="faq">Comment sera controle mon ticket a l'entree du car ?</h3>

                    <p>
                        Avant de monter dans le car, vous devrez presenter a un agent de la gare votre SMS.
                        C'est votre Ticket.
                        <br> Vous pouvez aussi imprimer ou presenter l'email recu lors votre achat.
                        En echange, l'agent de la gare vous remettra votre ticket papier.
                    </p>

                </div>
                <div class="col-sm-6 faq-det">
                    <h3 class="faq">J'ai perdu le sms, comment faire ?</h3>

                    <p>
                        Vous pouvez presenter l'email recapitulatif a l'agent mTick present en gare.
                        Et si vous n'avez pas non plus votre email, presentez-nous les pieces d'identites des differents
                        passagers ainsi que le numero de telephone utilise pour la commande, nous saurons vous
                        retrouver.
                    </p>
                </div>
            </div>

        </div>
        <!-- /container -->
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end section -->
@include('voyage.partials._footer')
</body>
</html>