<header id="header">
  <div id="header-wrap">
    <!-- Top Secondary Nav -->
    <nav class="secondary-nav border-bottom">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-4 header-contact">
            <p>Let's talk! <strong>+57 444 11 00 35</strong></p>
          </div>
          <div class="col-md-4 shipping-purchase text-center">
            <p>Free shipping on a purchase value of $200</p>
          </div>
          <div class="col-md-4 col-sm-12 user-items">
            <ul class="d-flex justify-content-end list-unstyled">
              <li>
                @auth
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                      <i class="icon icon-user me-1"></i>
                      <span>{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                      <li>
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit" class="dropdown-item">Log Out</button>
                        </form>
                      </li>
                    </ul>
                  </div>
                @else
                  <a href="{{ route('login') }}">
                    <i class="icon icon-user"></i>
                  </a>
                @endauth
              </li>
              <li><a href=""><i class="icon icon-shopping-cart"></i></a></li>
              <li><a href=""><i class="icon icon-heart"></i></a></li>
              <li class="user-items search-item pe-3">
                <a href="#" class="search-button"><i class="icon icon-search"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- Primary Main Nav -->
    <nav class="primary-nav padding-small">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-2 col-md-2">
            <div class="main-logo">
              <a href="{{ route('home') }}">
                <img src="{{ asset('images/main-logo.png') }}" alt="logo">
              </a>
            </div>
          </div>
          <div class="col-lg-10 col-md-10">
            <div class="navbar">
              <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                <ul class="menu-list">
                  <li><a href="{{ route('home') }}" class="item-anchor active">Home</a></li>
                  <li><a href="{{ route('about') }}" class="item-anchor">About</a></li>
                  <li><a href="" class="item-anchor">Shop</a></li>
                  <li><a href="" class="item-anchor">Blog</a></li>
                  <li><a href="" class="item-anchor">Contact</a></li>
                  <li><a href="{{ route('dashboard') }}" class="item-anchor">Dashboard</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>

<!-- Search popup (optionnel, tu peux l'ajouter où tu veux) -->
<div class="search-popup">
  <div class="search-popup-container">
    <form role="search" method="get" class="search-form" action="">
      <input type="search" class="search-field" placeholder="Type and press enter" name="s" />
      <button type="submit" class="search-submit"><i class="icon icon-search"></i></button>
    </form>

    <h5 class="cat-list-title">Browse Categories</h5>
    <ul class="cat-list">
      <li class="cat-list-item"><a href="#">Men Jackets</a></li>
      <li class="cat-list-item"><a href="#">Fashion</a></li>
      <li class="cat-list-item"><a href="#">Casual Wears</a></li>
      <li class="cat-list-item"><a href="#">Women</a></li>
      <li class="cat-list-item"><a href="#">Trending</a></li>
      <li class="cat-list-item"><a href="#">Hoodie</a></li>
      <li class="cat-list-item"><a href="#">Kids</a></li>
    </ul>
  </div>
</div>
