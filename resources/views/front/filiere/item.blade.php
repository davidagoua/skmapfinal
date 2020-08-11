<a  href="{{ route('filiere.show', ['id'=>$filiere]) }}" class="col-12  col-md-6 mt-3 wow fadeInUp">
    <div class="card filiere-item">
        <div class="card-body">
            <div class="row">
                <div class="col-3 text-center">
                    <span class="fa fa-4x fa-{{$filiere->icon}}"></span>
                </div>
                <div class="col-9 text-left">
                    <span>
                        {{ $filiere->nom }}
                    </span><br>
                        <span class=" text-muted">
                    @switch($filiere->type)
                        @case(1)
                            BTS
                            @break
                        @case(1)
                            LICENCE
                            @break
                        @default
                            CAP
                            @break
                    @endswitch
                    </span>
                </div>
            </div>
        </div>
    </div>
</a>
