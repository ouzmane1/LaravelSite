<div class="header-right-wrap">
     {{-- <div class="same-style header-search">
         <a class="search-active" href="#"><i class="pe-7s-search"></i></a>
         <div class="search-content">
             <form action="#">
                 <input type="text" placeholder="Search" />
                 <button class="button-search"><i class="pe-7s-search"></i></button>
             </form>
         </div>
     </div> --}}
     <div class="same-style account-satting">
         <a class="account-satting-active" href="#"><i class="pe-7s-user-female"></i></a>
         <div class="account-dropdown">
             <ul>
                 <li><a href="{{route('websites.connexion')}}">Login</a></li>
                 {{-- <li><a href="{{ route('websites.inscription')}}">Register</a></li> --}}
                 <li><a href="my-account.html">my account</a></li>
             </ul>
         </div>
     </div>

     {{-- <div class="same-style header-wishlist">
         <a href="wishlist.html"><i class="pe-7s-like"></i></a>
     </div> --}}

     <div class="same-style cart-wrap">
         <button class="icon-cart">
            <a href="{{route('website.panier')}}"></a> <i class="pe-7s-shopbag"></i>
             <span class="count-style">02</span>
         </button>
         <div class="shopping-cart-content">
             {{-- <ul>
                 <li class="single-shopping-cart">
                     <div class="shopping-cart-img">
                         <a href="#"><img alt="" src="{{asset('assets/img/cart/cart-1')}}"></a>
                     </div>
                     <div class="shopping-cart-title">
                         <h4><a href="#">T- Shart & Jeans </a></h4>
                         <h6>Qty: 02</h6>
                         <span>$260.00</span>
                     </div>
                     <div class="shopping-cart-delete">
                         <a href="#"><i class="fa fa-times-circle"></i></a>
                     </div>
                 </li>
                 <li class="single-shopping-cart">
                     <div class="shopping-cart-img">
                         <a href="#"><img alt="" src="{{asset('assets/img/cart/cart-2')}}"></a>
                     </div>
                     <div class="shopping-cart-title">
                         <h4><a href="#">T- Shart & Jeans </a></h4>
                         <h6>Qty: 02</h6>
                         <span>$260.00</span>
                     </div>
                     <div class="shopping-cart-delete">
                         <a href="#"><i class="fa fa-times-circle"></i></a>
                     </div>
                 </li>
             </ul>
             <div class="shopping-cart-total">
                 <h4>Shipping : <span>$20.00</span></h4>
                 <h4>Total : <span class="shop-total">$260.00</span></h4>
             </div> --}}
             <div class="shopping-cart-btn btn-hover text-center">
                 <a class="default-btn" href="{{route('website.panier')}}">view cart</a>
                 <a class="default-btn" href="checkout.html">checkout</a>
             </div>
         </div>
     </div>
 </div>

