<div class="col-12 col-sm-6 col-lg-3">
    <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
        <!-- Post Thumb -->
        <div class="blog-post-thumb mb-50">
            <img src="{{ asset('img/blog-img/1.jpg') }}" alt="">
        </div>
        <!-- Post Title -->
        <a href="#" class="post-title">{{ $article->titre }}</a>
        <!-- Post Meta -->
        <div class="post-meta">
            <p>par <a href="#">{{ $article->user->name }}</a> | <a href="#">{{ $article->updated_at }}</a> | <a href="#">3 comments</a></p>
        </div>
        <!-- Post Excerpt -->
        <p>{{ Str::limit($article->contenue,50, '...') }}</p>
        <!-- Read More btn -->
        <a href="#" class="btn academy-btn btn-sm mt-15">Lire</a>
    </div>
</div>
