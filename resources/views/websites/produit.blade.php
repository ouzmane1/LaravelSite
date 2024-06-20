@extends('layouts.template')
@section('titre')
Page produit
@endsection

@section('contenue')
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{route('websites.accueil')}}">Accueil</a>
                </li>
                <li class="active">Produit </li>
            </ul>
        </div>
    </div>
</div>

<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                @if(Session::has('success'))
                <div class="alert alert-success">
                   <p class="text text-success"> {{Session::get('success')}}</p>
                </div>
                @endif
                {{-- @if ($panierCount >= 4)
                <div class="row">
                    <div class="col-lg-12 alert alert-danger">
                        <p class="text text-danger"> Attention vous avez {{$panierCount}} produits dans le panier</p>
                    </div>
                </div>
                @elseif(Session::has('success'))
                <div class="alert alert-success">
                   <p class="text text-success"> {{Session::get('success')}}</p>
                </div>
                @endif --}}


                <div class="row">
                    <div class="col-lg-6"><h4 class="pro-sidebar-title pt-35">Rechercher Produit</h4></div>
                    <div class="col-lg-6">
                        <div class="sidebar-style mr-30">
                            <div class="sidebar-widget">

                                <div class="pro-sidebar-search mb-50 mt-25">
                                    <form class="pro-sidebar-search-form" action="/search" method="GET">
                                        <input type="text"  name="search" placeholder="Recherche..." value="{{ isset($search) ? $search: ""}}">
                                        <button type="submit">
                                            <i class="pe-7s-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!-- Afficher le nombre de produits -->
                <div class="row">
                    <div class="col-lg-12">
                        <p>Nombre de produits disponibles : <strong>{{ $productCount }}</strong></p>
                    </div>
                </div> --}}


                <div class="shop-bottom-area mt-35">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">

                            <div class="row">

                                @foreach ($products as $product )


                                <div class="col-xl-3 col-md-5 col-lg-5 col-sm-5">
                                    <div class="product-wrap mb-25 scroll-zoom">
                                        <div class="product-img">
                                            <a href="{{--{{route('website.product-detail')}}--}}">
                                                <img class="default-img" src="{{asset("images/products/".$product->photo1)}}" alt="">
                                                <img class="hover-img" src="{{asset("images/products/".$product->photo2)}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-same-action pro-wishlist">
                                                    <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                </div>
                                                <div class="pro-same-action pro-cart">
                                                    <form method="POST" action="{{route('panier.addToCard')}}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$product->id}}">
                                                        <input type="hidden" name="name" value="{{$product->name}}">
                                                        <input type="hidden" name="price" value="{{$product->price}}">
                                                        <input type="hidden" name="photo1" value="{{$product->photo1}}">
                                                        <input type="hidden" name="qte" value="1">
                                                        <button type="submit" title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Ajouter</a>
                                                    </form>
                                                </div>
                                                <div class="pro-same-action pro-quickview">
                                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h3><a href="product-details.html">{{$product->name}}</a></h3>
                                            {{-- <div class="product-rating">
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div> --}}
                                            <div class="pt-2 product-price">
                                                <span>{{$product->price}}€</span>
                                                {{-- <span class="old">$ 60.00</span> --}}
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection

