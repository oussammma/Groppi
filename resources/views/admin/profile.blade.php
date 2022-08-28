@extends('layouts.app')
@section('prof-title')
    <title>Profiles</title>
@endsection
@section('content')
    @extends('admin/adminBar')
@section('admin_content')
    <div class="container profil-cont">
        <div class="content-title d-flex align-items-center mb-5">
            <i class="uil uil-user"></i>
            <span class="text ms-3">Profile</span>
        </div>
        <div class="row mx-0 mx-lg-5">
            <div class="col-12 col-lg-6 pe-0 pe-lg-5">
                <div class="col-12 mb-5">
                    <div class="col-title d-flex align-items-center">
                        <i class="fa-solid fa-pen-to-square i"></i>
                        <h5 class="mt-1 ms-2 text-capitalize">profile information</h5>
                    </div>
                    <form method="POST" action="{{ route('profile.edite') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Nom :</label>
                            <input type="text" name="name" id="name" placeholder="Entrer votre nom"
                                value="{{ Auth::user()->name }}" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="email">Adresse e-mail :</label>
                            <input type="email" name="email" id="email" placeholder="Entrer votre email"
                                value="{{ Auth::user()->email }}" required autocomplete="off">
                        </div>
                        <button type="submit" class="btn text-white">Enregistrer</button>
                    </form>
                </div>
                <div class="col-12">
                    <div class="col-title d-flex align-items-center">
                        <i class="fa-brands fa-whatsapp bg-success i"></i>
                        <h5 class="mt-1 ms-2 text-capitalize">changer némuro whatsapp</h5>
                    </div>
                    <form method="POST" action="{{ route('watsp.edite') }}">
                        @csrf
                        @foreach ($watps as $item)
                            <div class="mb-3">
                                <label for="wtsp_num">Numéro :</label>
                                <input type="hidden" name="num_id" value="{{ $item->id }}">
                                <input type="text" value="{{ $item->number }}" name="whtsp_num" id="wtsp_num"
                                    placeholder="EX: +212-12345678" required autocomplete="off" />
                            </div>
                        @endforeach
                        <button type="submit" class="btn text-white">Enregistrer</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6 ps-0 ps-lg-5 mt-5 mt-lg-0 mb-5 mb-lg-0">
                <div class="col-title d-flex align-items-center">
                    <i class="fa-solid fa-key i"></i>
                    <h5 class="mt-1 ms-2 text-capitalize">changer le mot de passe</h5>
                </div>
                <form action="{{ route('update.pass') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="old_pass">
                            Mot de passe actuel :</label>
                        <input name="old_pass" type="password" id="old_pass" placeholder="Entrer le mot de passe actuel"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="new_pass">
                            Nouveau mot de passe :</label>
                        <input name="new_pass" type="password" id="new_pass"
                            title="Le mot de passe doit contenir : Minimum 8 caractères au moins 1 alphabet et 1 chiffre"
                            placeholder="8 caractères au moins 1 alphabet et 1 chiffre" required
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" />
                    </div>
                    <div class="mb-3">
                        <label for="conf_pass">
                            Confirmez le mot de passe :</label>
                        <input name="conf_pass" type="password" id="conf_pass" placeholder="Confirmation de mot de passe" />
                    </div>
                    <button type="submit" class="btn text-white">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@endsection
