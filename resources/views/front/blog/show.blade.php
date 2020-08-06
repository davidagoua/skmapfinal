@extends('front.base')


@section('body')


    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <small>{{ $article->categorie->nom }}</small>
                        <h4>{{$article->titre}}</h4>
                        <p>
                            par {{ $article->user->name }} le {{ $article->created_at }}
                        </p>
                        <p>
                            {{$article->contenue}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($article->comments as $comment)
                <div class="col-10 col-md-4 mt-1">
                    <div class="row">
                        <div class="col-2">
                            <span class="fa fa-2x fa-user"></span>
                        </div>
                        <div class="col-10">
                            <div class="d-flex justify-content-between">
                                <span>{{$comment->nom}}</span>
                                <small class="text-muted">{{$comment->created_at}}</small>
                            </div>
                            <p>{{$comment->contenue}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <form action="{{ route('blog.comment', ['id'=>$article]) }}" method="post">
                        @csrf
                        <div class="text-center">Commenter ce article</div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" required name="email" class="form-control rounded-0">
                        </div>
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" required name="nom" class="form-control rounded-0">
                        </div>
                        <div class="form-group">
                            <label>Commentaire</label>
                            <textarea class="form-control rounded-0" name="contenue" required id="" cols="30" rows="10"></textarea>
                        </div>
                        <p>
                            <button class="btn btn-sm academy-btn " type="submit">Envoyer</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

@endsection
