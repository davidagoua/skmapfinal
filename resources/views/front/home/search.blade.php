@extends('front.base')


@section('body')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{ asset('img/bg-img/breadcumb.jpg') }});">
        <div class="bradcumbContent">
            <h2>{{ Str::title($categorie->nom) }}</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <h3>Filières en {{$categorie->nom}}</h3>
                    <div class="row">
                        @foreach($categorie->filieres->split(2) as $filieres)
                            <div class="col-12 col-md-6">
                                @each('front.filiere.item', $filieres,'filiere')
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-3 text-center">
                <div class="text-center">
                    <h3>Debouches en {{$categorie->nom}}</h3>
                    <div class="row">
                        @each('front.debouche.item', $debouches, 'deb')
                    </div>
                    @if($debouches->isEmpty() )
                        :( Aucun debouchés fournie pour cette categorie
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

@endsection
