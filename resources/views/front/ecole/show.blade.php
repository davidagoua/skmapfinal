@extends('front.base')


@section('body')

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading  mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>{{ $ecole->sigle }}</span>
                        <h3>{{ Str::title($ecole->nom) }}</h3>
                        <p></p>
                        <div class="d-flex justify-content-between">
                            <a href="http://{{ $ecole->site_web }}" class="text-warning">https://{{ $ecole->site_web }}</a>
                            <a href="{{ route('ecole.itineraie', ['id'=>$ecole]) }}" class="btn academy-btn  btn-sm">
                                <span>Itineraire</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <b>Description</b>
                    <hr>
                    <p>
                        {{$ecole->description}}
                    </p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <b>Filières proposés</b>
                    <hr>
                    <div class="row">
                        @if($ecole->filieres->count() > 0)
                                @each('front.filiere.item', $ecole->filieres , 'filiere')
                        @else
                            Cette ecole ne propose aucune filières
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

@endsection
