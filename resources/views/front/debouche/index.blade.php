@extends('front.base')


@section('body')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">
    <div class="bradcumbContent">
        <h2>Debouchés</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->


<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span>Rechercher un debouché</span>
                    <div>
                        <form action="" method="get">
                            <div class="input-group mb-3">
                                <input value="{{old('q')}}" type="text" name="q" class="form-control" placeholder="Comptable, Chirugien, Avocat..." >
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

            @each('front.debouche.item', $debouches, 'deb')
        </div>
        <div class="d-flex wow slideInLeft justify-items-center">
            <div class="flex-shrink-1">
                {{ $debouches->links() }}
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Popular Courses Area End ##### -->

@endsection
