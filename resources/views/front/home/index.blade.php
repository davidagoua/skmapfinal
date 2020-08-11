@extends('front.base')


@section('body')
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel justify-content-center">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ asset('img/bg-img/bg-1.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">La plateforme qui centralise tous les établissements de Côte d'Ivoire</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenue sur <br>Soukloumap</h2>
                                <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Commencer la decouverte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Vous aurez également l'occasion de faire des rencontres interculturelles</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenue sur <br>Soukloumap</h2>
                                <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Commencer la decouverte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">La plateforme qui regroupe Toutes les filières  d'ici et débouchés
                                    <br>Vous avez les offres d'emploi, Bourse d'études et opportunité d'affaire!</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenue sur <br>Soukloumap</h2>
                                <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Commencer la decouverte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->


    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                    <h5>Formations <br><small class="font-weight-light">Accédez à des établissements de qualité</small></h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                    <h5>Relations<br><small class="font-weight-light">Partage de culture.</small></h5>

                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-telephone-3"></i>
                                    <h5>Etablissement <br><small class="font-weight-light">Plus de 16 millions d'établissements</small></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->


    <div class="container mt-5 pt-3">
        <div class="row">
            <div class="col-12">
                <h3>Vous sentez de l'interêt pour un débouché?</h3>
                <hr>
                <div class="row">
                    @each('front.debouche.item', $debouches, 'deb')
                </div>
            </div>
        </div>
    </div>
@endsection
