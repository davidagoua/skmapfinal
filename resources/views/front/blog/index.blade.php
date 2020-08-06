@extends("front.base")


@section('body')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Actualités</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                @each('front.blog.item', $articles, 'article')
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

@endsection
