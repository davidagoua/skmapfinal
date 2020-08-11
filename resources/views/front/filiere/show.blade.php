@extends('front.base')


@section('body')

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>{{ $filiere->categorie->nom }}</span>
                        <h3>{{ $filiere->nom }}</h3>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs wow fadeInLeft" id="sectionTab" role="tablist">
                <li class="nav-item"><a href="#desc-pane" aria-controls="desc-pane" role="tab" data-toggle=tab id="desc-tab" class="nav-link active">Description</a></li>
                <li class="nav-item"><a href="#debs-pane" aria-controls="debs-pane" role="tab" data-toggle=tab id="debs-tab" class="nav-link">Debouches</a></li>
                <li class="nav-item"><a href="#ets-pane" aria-controls="ets-pane" role="tab" data-toggle=tab id="ets-tab" class="nav-link">Etablissement</a></li>
                <li class="nav-item"><a href="#tems-pane" aria-controls="tems-pane" role="tab" data-toggle=tab id="tems-tab" class="nav-link">Temoignages</a></li>
            </ul>
            <div class="tab-content mt-3">
                <div class="tab-pane" aria-labelledby="desc-tab" id="desc-pane">
                    <p>
                        {{$filiere->description}}
                    </p>
                </div>
                <div class="tab-pane" aria-labelledby="debs-tab" id="debs-pane">
                    <div class="row">
                        @each('front.debouche.item', $filiere->debouches, 'deb')
                    </div>
                </div>
                <div class="tab-pane" aria-labelledby="ets-tab" id="ets-pane">
                    <div>
                        @if($filiere->ecoles->isEmpty())
                            Aucune ecole disponible pour cette filiere
                        @else
                            @each('front.ecole.item', $filiere->ecoles, 'ecole')
                        @endif
                    </div>
                </div>
                <div class="tab-pane" aria-labelledby="tems-tab" id="tems-pane">

                </div>
            </div>


        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

@endsection
