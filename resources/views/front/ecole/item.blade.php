<div class="col-12 col-md-8 mt-2 p-3" style="background-color: #eee">
    <div>
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('storage/'.$ecole->image) }}" width="150" height="100" alt="">
            </div>
            <div class="col-9 text-left">
                <h4 class="font-weight-bold">{{$ecole->nom}}</h4>
                <span class="text-muted">{{$ecole->sigle}}</span>
                <p class="text-right">
                    <a href="{{ route('ecole.show',['id'=>$ecole]) }}" class="btn btn-sm academy-btn">Voir</a>
                </p>
            </div>
        </div>
    </div>

</div>
