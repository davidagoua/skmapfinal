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
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                            @each('front.blog.item', $articles, 'article')

                        </div>
                    </div>

                    @include('front.pagination', ['items'=>$articles])
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="#" method="get">
                                <input type="search" name="q" id="Search" placeholder="Rechercher...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Categories</h5>
                            <ul>
                                <li><a href="?categorie=">Toutes</a></li>
                                @foreach($categories as $cat)
                                <li><a href="?categorie={{$cat->id}}">{{$cat->nom}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Articles recents</h5>
                            @foreach($articles_recent as $article)
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ asset('storage/'.$article->image) }}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>{{$article->titre}}</h6>
                                    </a>
                                    <a href="#" class="post-date">{{ $article->created_at }}</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                                @endforeach
                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget">
                            <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

@endsection
