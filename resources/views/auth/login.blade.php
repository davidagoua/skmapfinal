@extends('front.base')


@section('body')
<div class=" p-5" style="background-color: #0b0b0b; height: 85%">
    <div class="row mt-5">
        <div class="col-12 offset-md-4 col-md-4">
            <div class="shadow text-center p-3 bg-white">
                <div>
                    <span>Se connecter avec</span>
                    <div class="">
                        <a href="" class="btn rounded-0 btn-outline-primary">Facebook</a>&nbsp;&nbsp;
                        <a href="" class="btn rounded-0 btn-outline-danger">Google</a>
                    </div>
                    <p>ou</p>
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <input type="text" required name="email" placeholder="Entrez votre email" class="form-control cinput">
                        </div>
                        @error('email')
                        <small class="red-text">{{ $message }}</small>
                        @enderror
                        <div class="form-group">
                            <input type="password" required name="password" placeholder="Entrez votre mot de passe" class="form-control cinput">
                        </div>
                        @error('password')
                        <small class="red-text">{{ $message }}</small>
                        @enderror
                        <p>
                            <button class="btn academy-btn btn-sm">Se connecter</button>
                        </p>
                    </form>

                </div>
            </div>
            <p class="small mt-2 d-flex justify-content-between">
                <a href="" class="text-white">Mot de passe oublié ?</a>
                <a href="{{ route('register') }}" class="text-white">Créer un nouveau compte</a>
            </p>
        </div>
    </div>
</div>
@endsection
