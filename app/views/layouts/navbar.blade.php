<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">KTG</a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li 
        @if (Route::currentRouteName()=="home") class="active" @endif >
          <a href="{{ URL::route('home'); }}"> Strona Główna </a>
      </li>
      <li><a href="#">To my!</a></li>
      <li><a href="#">Wyjazdy</a></li>
      <li><a href="#">Galerie</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @if ( Auth::guest() )
        <li 
          @if (Route::currentRouteName()=="user.create") class="active" @endif >
            <a href="{{ URL::route('user.GETlogin'); }}"> Zaloguj </a>
        </li>
      @else
        <li><a href="{{ URL::route('logout'); }}"> Wyloguj się </a></li>
      @endif
      
    </ul>
  </div>
  </div>
</nav>