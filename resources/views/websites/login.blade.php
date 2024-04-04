@extends('layouts.template')
@section('titre')
Page connexion
@endsection

@section('contenue')

<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{route('websites.accueil')}}">Accueil</a>
                </li>
                <li class="active">Connexion</li>
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
                        <a class="active" data-bs-toggle="tab" href="{{route('websites.connexion')}}">
                            <h4> Connexion </h4>
                        </a>
                        <a href="{{route('websites.inscription')}}">
                            <h4> Inscription </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="" method="post">
                                        <input type="email" name="email" placeholder="Email">
                                        <input type="password" name="user-password" placeholder="Password">
                                        <div class="button-box">

                                        <button type="submit"><span>Connexion</span></button>
                                        </div>
                                    </form>
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
