<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/styles.css') }}"/>
        <script type="text/javascript" src="{{ asset('/js/easytimer.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
        <title>IOT Ins Blau</title>

        <style>

        </style>
    </head>
    <body class="welkom">
      <div class="blauw">
        <img class="logo" src="{{ asset('/img/logo.png') }}" alt="logo Ins Blau">
      </div>
      <div class="zwart">
        <h1>W E L K O M</h1>
        <img class="beneden" src="{{ asset('/img/beneden.png') }}" alt="naarbeneden">
        <img class="menu_start" src="{{ asset('/img/menu.png') }}" alt="menu">
        <div id="mySidenav" class="sidenav">
         <a class="closebtn">&times;</a>
         <a onClick="aboutMe()" id="overMij" href="#">TIMER</a>
         <a href="/program">HET&nbsp;PROGRAMMA</a>
         <a href="/contact">CONTACT</a>
         <img class="logo_wit" src="{{ asset('/img/logo_wit.png') }}" alt="logo Ins Blau wit">
        </div>
        <p class="betreden">WANNEER DE TIMER IS AFGELOPEN MAG U DE ZAAL BETREDEN</p>

      </div>
      <div class="blauw2">
        <p id="timer"></p>
      </div>



    </body>
</html>
