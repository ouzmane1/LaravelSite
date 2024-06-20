<div class="header-right-wrap">
     <div class="same-style account-satting mr-5">
         <a class="account-satting-active" href="#"><i class="pe-7s-user-female"></i></a>
         <div class="account-dropdown">
             <ul>

                 @if (Auth::check() && Auth::user()->role==='client')

                 <li><a href="{{route('website.account')}}">Compte</a></li>
                 <li class="nav-item" aria-labelledby="navbarDropdown">
                    <a class="" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @else
                 <li><a href="{{route('websites.inscription')}}">S'inscrire</a></li>
                 <li><a href="{{route('websites.connexion')}}">Se Connecter</a></li>
                @endif
                </ul>
         </div>
     </div>
     <div class="same-style cart-wrap">
         <button class="icon-cart">
            <a href="{{route('website.panier')}}"> <i class="pe-7s-shopbag"></i></a>
             @if ($panierCount >= 1)
             <span class="count-style">{{$panierCount}}</span>
             @endif
         </button>
     </div>
 </div>

