@extends('layouts.template')
@section('titre')
Panier
@endsection

@section('contenue')

<div class="cart-main-area pt-90 pb-100">
    <div class="container">
        <h3 class="cart-page-title">Votre Panier</h3>
        {{-- <div class="row">
            <div class="col-lg-12">
                <p>Nombre de produits disponibles : <strong>{{ $panierCount }}</strong></p>
            </div>
        </div> --}}
         {{-- @if ($panierCount >= 4)
            <div class="row">
                <div class="col-lg-12 alert alert-danger">
                    <p class="text text-danger"> Attention vous avez {{$panierCount}} produits dans le panier</p>
                </div>
            </div>
        @endif --}}

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                @if(Session::has('success'))
                <div class="alert alert-success">
                   <p class="text text-success"> {{Session::get('success')}}</p>
                </div>
                @endif
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Nom Produit</th>
                                    <th>Prix</th>
                                    <th>Qte</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $total=0;
                            @endphp

                        @forelse($products as $key => $product )

                        @php
                            $total+=$product['price'] * $product['qte'];
                            // print_r( $product);
                        @endphp

                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img width="80" src="{{asset('images/products/'. $product['photo1'])}}" alt=""></a>
                                </td>
                                <td class="product-name"><a href="#">{{$product['name']}}</a></td>
                                <td class="product-price-cart"><span class="amount">€{{$product['price']}}</span></td>
                                <td class="product-quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" id="qte" type="text" name="qtybutton" value="{{ $product['qte']}}">
                                    </div>
                                </td>
                                <td class="product-subtotal">€{{ $product['price'] * $product['qte'] }}</td>
                                <td class="product-remove">
                                    {{-- <a href="#"><i class="fa fa-pencil"></i></a> --}}
                                    <a href="{{ route('panier.supProPanier',$key)}}"><i class="fa fa-trash"></i></a>
                               </td>
                            </tr>

                        @empty
                                <tr><td colspan="6">Panier vide</td></tr>
                        @endforelse


                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{route('websites.produit')}}">Continuer vos achat</a>
                                </div>
                                <div class="cart-clear">
                                    {{-- <button>Update Shopping Cart</button> --}}
                                    <a href="{{route('panier.viderPanier')}}">Vider Tout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">

                    <div class="col-lg-4 col-md-12">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Total du Panier</h4>
                            </div>

                            <h5>Total produits <span>€{{$total}}</span></h5>

                            {{-- <div class="total-shipping">
                                <h5>Total shipping</h5>
                                <ul>
                                    <li><input type="checkbox"> Standard <span>$20.00</span></li>
                                    <li><input type="checkbox"> Express <span>$30.00</span></li>
                                </ul>
                            </div> --}}
                            <h4 class="grand-totall-title">Grand Total  <span>€{{$total}}</span></h4>
                            <a href="{{route('website.checkout')}}">Passer la commande</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
