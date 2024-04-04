<div class="sidebar">
    {{-- <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> --}}

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

             <li class="nav-item" aria-labelledby="navbarDropdown">
                <a class="btn btn-danger w-100" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        @if (Auth::check() && Auth::user()->role==='admin')
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Categorie
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('categories.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter categorie</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('categories.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste categorie</p>
              </a>
            </li>
          </ul>
        </li>
        @endif
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Produit
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('products.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter produit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('products.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste produit</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Client
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('customers.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste client</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Commande
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('orders.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste commandes</p>
                </a>
              </li>
            </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>



