@extends('layouts.template')
@section('titre')
Detail produit
@endsection

@section('contenue')
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Shop Details </li>
            </ul>
        </div>
    </div>
</div>

<div class="shop-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            @foreach ($products as $product)

            <div class="col-lg-6 col-md-6">
                <div class="product-details">
                    <div class="product-details-img">
                        <div class="tab-content jump">
                            <div id="shop-details-1" class="tab-pane large-img-style">
                                <img src="{{asset('images/products/'.$product->photo1)}}" alt="">

                                <div class="img-popup-wrap">
                                    <a class="img-popup" href="assets/img/product-details/b-large-1.jpg"><i class="pe-7s-expand1"></i></a>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="shop-details-tab nav">
                            <a class="shop-details-overly" href="#shop-details-1" data-bs-toggle="tab">
                                <img src="assets/img/product-details/small-1.jpg" alt="">
                            </a>
                            <a class="shop-details-overly active" href="#shop-details-2" data-bs-toggle="tab">
                                <img src="assets/img/product-details/small-2.jpg" alt="">
                            </a>
                            <a class="shop-details-overly" href="#shop-details-3" data-bs-toggle="tab">
                                <img src="assets/img/product-details/small-3.jpg" alt="">
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product-details-content ml-70">
                    <h2>Products Name Here</h2>
                    <div class="product-details-price">
                        <span>$18.00 </span>
                        <span class="old">$20.00 </span>
                    </div>
                    {{-- <div class="pro-details-rating-wrap">
                        <div class="pro-details-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <span><a href="#">3 Reviews</a></span>
                    </div> --}}
                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                    {{-- <div class="pro-details-list">
                        <ul>
                            <li>- 0.5 mm Dail</li>
                            <li>- Inspired vector icons</li>
                            <li>- Very modern style  </li>
                        </ul>
                    </div> --}}
                    {{-- <div class="pro-details-size-color">
                        <div class="pro-details-color-wrap">
                            <span>Color</span>
                            <div class="pro-details-color-content">
                                <ul>
                                    <li class="blue"></li>
                                    <li class="maroon active"></li>
                                    <li class="gray"></li>
                                    <li class="green"></li>
                                    <li class="yellow"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pro-details-size">
                            <span>Size</span>
                            <div class="pro-details-size-content">
                                <ul>
                                    <li><a href="#">s</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">l</a></li>
                                    <li><a href="#">xl</a></li>
                                    <li><a href="#">xxl</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}

                    <div class="pro-details-quality">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                        </div>
                        <div class="pro-details-cart btn-hover">
                            <a href="#">Add To Cart</a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

