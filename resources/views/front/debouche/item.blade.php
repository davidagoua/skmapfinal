<!-- Single Top Popular Course -->
<div class="col-12 col-lg-6">
    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
        <div class="popular-course-content">
            <h5>{{ Str::title($deb->nom)}}</h5>
            <span>{{ $deb->categorie->nom }}</span>
            <p>{{ Str::limit($deb->description, 50, '...') }}</p>
            <a href="{{ route('debouche.show', ['debouche'=>$deb]) }}" class="btn academy-btn btn-sm">Details</a>
        </div>
        <div class="popular-course-thumb bg-img" style="background-image: url({{ asset('storage/'.$deb->image) }});"></div>
    </div>
</div>
