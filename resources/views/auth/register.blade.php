@extends('front.base')


@section('body')
    <div class=" p-5" style="background-color: #0b0b0b; height: 85%">
        <div class="row mt-5">
            <div class="col-12 offset-md-2 col-md-8">
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
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <input type="text" required name="text" placeholder="Entrez votre nom d'utilisateur" class="form-control cinput">
                                    @error('email')
                                    <small class="red-text">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <input type="text" required name="email" placeholder="Entrez votre email" class="form-control cinput">
                                    @error('email')
                                    <small class="red-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group  col-12 col-md-6">
                                    <input type="password" required name="password" placeholder="Entrez votre mot de passe" class="form-control cinput">
                                    @error('password')
                                    <small class="red-text">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group  col-12 col-md-6">
                                    <input type="password" required name="confirm_password" placeholder="Confirmer votre mot de passe" class="form-control cinput">
                                    @error('confirm_password')
                                    <small class="red-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <p>
                                <button class="btn academy-btn btn-sm">Se connecter</button>
                            </p>
                        </form>

                    </div>
                </div>
                <p class="small mt-2 d-flex justify-content-between">
                    <a href="" class="text-white">Mot de passe oublié ?</a>
                    <a href="" class="text-white">Créer un nouveau compte</a>
                </p>
            </div>
        </div>
    </div>
@endsection
