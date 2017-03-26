<nav class="navbar-ucll" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo"><img class="logo-image hide-on-small-only" src="{{ asset('img/logo_white.png') }}" alt=""/> <span>Klimaatcasino</span></a>
      <ul class="right hide-on-med-and-down">
        @yield('menu-links')
      </ul>

      <ul id="nav-mobile" class="side-nav">
        @yield('menu-links')
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
