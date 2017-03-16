
  <!DOCTYPE html>
  <html lang="{{ config('app.locale') }}">
    <head>
      <title>Klimaatcasino</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      @include('layout.navbar')

      @yield('content')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    </body>
  </html>
