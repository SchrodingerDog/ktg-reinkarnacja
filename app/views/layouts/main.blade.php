<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Kamil Prosciewicz">
    <link rel="Shortcut icon" href="{{ URL::asset('img/favicon.gif') }}" />
    @yield('title')
    <title>KTG</title>

    {{ HTML::style('/css/bootstrap.min.css') }}
    {{ HTML::style('/css/style.css') }}
  </head>

  <body>
    <div class = "bg" style="display:none"></div>
    
    @include('layouts.navbar')
    <div class="container">
      @yield('content')
      
    </div><!-- /.container -->
    @include('layouts.footer')

    {{ HTML::script('js/jquery.min.js')}} 
    {{ HTML::script('js/bootstrap.min.js')}} 
    
    {{ HTML::script('js/background.js')}} 

  </body>
</html>
