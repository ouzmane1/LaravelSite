@extends('layouts.template')
@section('titre')
Page presentation
@endsection

@section('contenue')
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{ route('websites.accueil')}}">Accueil</a>
                </li>
                <li class="active">About </li>
            </ul>
        </div>
    </div>
</div>

<div class="welcome-area pt-100 pb-95">
    <div class="container">
        <div class="welcome-content text-center">
            <h5>QUI SOMMES NOUS</h5>
            <h1>BIENVENUE A <span style="color: #B028D7">LAMICOSHOP</span></h1>
            <p>Bienvenue sur <span style="color: #B028D7">LAMICOSHOP</span>, votre destination en ligne pour tout ce qui concerne l'informatique ! Que vous soyez un passionné de technologie ou un professionnel à la recherche des derniers équipements, nous avons tout ce dont vous avez besoin pour satisfaire vos besoins informatiques.</p>
        </div>
    </div>
</div>



{{-- <div class="team-area pt-95 pb-70">
    <div class="container">
        <div class="section-title-2 text-center mb-60">
            <h2>Team Members</h2>
            <p>Lorem ipsum dolor sit amet conse ctetu.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-1.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Mr.Mike Banding</h4>
                        <span>Manager </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-3.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Mr.Peter Pan</h4>
                        <span>Developer </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-2.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Ms.Sophia</h4>
                        <span>Designer </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-4.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Mr.John Lee</h4>
                        <span>Chairmen </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


@endsection

