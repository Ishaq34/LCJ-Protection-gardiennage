<?php 

    $title = 'Accueil';
    require_once('public/head.php');
?>

    <header class="text-center" id="top">
        <div class="text-intro">
            <h1>LCJ PROTECTION GARDIENNAGE</h1>
            <hr style="width : 50px; border-top: 1px solid #FFEB3B">
            <p class="pretext text-white font-italic" style="margin: 10px;">
            s’engage à vous fournir une sécurité et une sûreté absolue et a pour ambition de redorer le métier de la sécurité privée. 
            </p>
        </div>
    </header>

    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="accueil">
                <img src="assets/img/logo_entier.png" alt="logo_lcj" style="height: 75px;">
            </a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-align-justify"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto" style="font-weight: 300;">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger " href="accueil">Accueil</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger " href="presentation">Présentation</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger " href="domaine">Domaine de compétences</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger " href="contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="concept" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 align-self-center">
                    <h2>Société de sécurité</h2>
                    <p>Notre société dispose d’Agents de Prévention et de Sécurité, pour des prestations de gardiennage, des missions d’intervention et de la surveillance via télésurveillance.</p>
                    <a href="presentation" class="btn btn-outline-secondary" style="text-transform: none;"> Découvrir</a>
                </div>

                <div class="col-md-6 d-none d-sm-block">
                    <img src="assets/img/secu.jpg" alt="Ordinateur" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <hr style="max-width: 75%;">

    <section id="home-icons" class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 mb-4 text-center">
                    <i class="fa fa-shield fa-3x mb-2"></i>
                    <h3>Mission de gardiennage</h3>
                    <p>Nous proposons des services de mission de gardiennage, afin de protéger les biens et les personnes avec ceci s’applique des prestations d’intervention sur différents sites pour protéger les biens et les personnes contre différents risques.</p>
                </div>

                <div class="col-md-4 mb-4 text-center">
                    <i class="fa fa-lock fa-3x mb-2"></i>
                    <h3>Agents certifiés</h3>
                    <p>Tous nos agents sont munis d’une carte professionnelle dématérialisée et matérialisée délivrée par le CNAPS et par notre société, d’une attestation SST, d’une formation SSIAP pour pourvoir exécuter les anomalies dans le domaine incendie et d’un certificat médical justifiant l’aptitude de nos agents.</p>
                </div>

                <div class="col-md-4 mb-4 text-center">
                    <i class="fa fa-bell fa-3x mb-2"></i>
                    <h3>Services</h3>
                    <p>Nous disposons aussi de plusieurs agents d’astreinte, pour éviter tous retard ou absence de nos agents qui sont formés auprès de divers organisme de formation afin de leur apprendre le métier de la sécurité.</p>
                </div>
            </div>
        </div>
    </section>

    <!--
    <section id="clients" class="text-center" style="padding: 2rem 0;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="info-header mb-5">
                        <h2 class="pb-3">Nos Clients</h2>
                        <p class="lead">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, omnis nostrum illum
                            maiores excepturi magni?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customer-logos slider pb-5" style="padding: 2rem 0;">
            <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
    </section>
    -->

<?php require_once('public/footer.php'); ?>


