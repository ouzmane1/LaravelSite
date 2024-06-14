@extends('layouts.template')
@section('titre')
Page register
@endsection

@section('contenue')

<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{route('websites.accueil')}}">Accueil</a>
                </li>
                <li class="active">Inscription </li>
            </ul>
        </div>
    </div>
</div>


<div class="login-register-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ms-auto me-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        {{-- <a  href="{{route('websites.connexion')}}">
                            <h4> Connexion </h4>
                        </a> --}}
                        <a class="active" href="{{route('websites.inscription')}}">
                            <h4> Inscription </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    @if (Auth::check())
                                    <h4>Inscription réussi ,</h4>
                                    Vous pouvez maintenant vous connecter. <a href="{{route('websites.connexion')}}"> Connexion</a>
                                    @else
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <input placeholder="Nom" type="text" name="name" id="name" required>
                                        <input placeholder="Adresse mail" type="email" name="email" required>
                                        <input placeholder="Mot de passe" type="password" name="password" required>
                                        <input placeholder="Confirmer Mot de passe" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        <div class="button-box">

                                        <button type="submit"><span>Inscription</span></button>
                                        </div>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" placeholder="Username">
                                        <input type="password" name="user-password" placeholder="Password">
                                        <input name="user-email" placeholder="Email" type="email">
                                        <div class="button-box">
                                            <button type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
