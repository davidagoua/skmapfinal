@extends('front.base')


@section('body')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Filières</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Rechercher une filiere</span>
                        <div>
                            <form action="" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" name="q" class="form-control" placeholder="ida, rhcom, sigl..." >
                                    <div class="input-group-append">
                                        <button class="btn academy-btn" type="submit" id="button-addon2">
                                            Rechercher
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($filieres->count() < 1)
                    <div class="text-center">
                        :( Aucun résultat trouvé
                    </div>
                @else
                    @each('front.filiere.item', $filieres, 'filiere')
                @endif
                <div class="d-flex justify-items-center">
                    <div class="flex-shrink-1">
                        {{ $filieres->links() }}
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->

@endsection
