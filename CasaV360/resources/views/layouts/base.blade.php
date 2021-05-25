<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/favicon-32x32.png') }}">
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <title>CasaV360</title>

</head>
<body>
<header class="header">
    <div class="overlay has-fade"></div>

    <nav class="container container--pall flex flex-jc-sb flex-ai-c">
        <a href="{{ route('home') }}" class="header__logo">
          <img src="{{ url('images/logo.svg') }}" alt="Easybank" />
        </a>

        <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
          <span></span>
          <span></span>
          <span></span>
        </a>

        <div class="header__links hide-for-mobile">
          <a href="#">Nos Services</a><a href="#">Gallerie</a><a href="{{ route('contact') }}">Contactez-nous</a><a href="#">Site Immobilier</a>
        </div>
    </nav>

    <div class="header__menu has-fade">
      <a href="">Nos Services</a>
      <a href="">Gallerie</a>
      <a href="{{ route('contact') }}">Contactez-nous</a>
      <a href="">Site Immobilier</a>
    </div>

  </header>
    @yield('content')
</body>
</html>