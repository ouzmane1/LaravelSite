@extends('layouts.template')
@section('titre')
Page contact
@endsection

@section('contenue')


<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{ route('websites.accueil')}}">Accueil</a>
                </li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-area pt-100 pb-100">
    <div class="container">
        {{-- <div class="contact-map mb-10">
            <div id="map"></div>
        </div> --}}
        <div class="custom-row-2">
            <div class="col-lg-4 col-md-5">
                <div class="contact-info-wrap">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p>+33 0 00 00 00 00</p>
                            <p>+33 0 00 00 00 00</p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p><a href="#">myname@email.com</a></p>
                            <p><a href="#">mywebsite.com</a></p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p>Address, </p>
                            <p>Postal, Commune.</p>
                        </div>
                    </div>
                    <div class="contact-social text-center">
                        <h3>Suivez nous</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                    <div class="contact-title mb-30">
                        <h2>Contacter nous</h2>
                    </div>
                    <form class="contact-form-style" id="contact-form" action="{{route('websites.save')}}" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <input name="nom" placeholder="Nom*" type="text">
                            </div>
                            <div class="col-lg-6">
                                <input name="prenom" placeholder="Prenom*" type="text">
                            </div>
                            <div class="col-lg-12">
                                <input name="email" placeholder="Email*" type="email">
                            </div>
                            <div class="col-lg-12">
                                <input name="sujet" placeholder="Sujet*" type="text">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Message*"></textarea>
                                <button class="submit" type="submit">ENVOYER</button>
                                <button class="reset" type="reset">ANNULER</button>

                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
