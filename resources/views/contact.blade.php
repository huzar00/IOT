<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/styles.css') }}"/>
        <script type="text/javascript" src="{{ asset('/js/easytimer.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
        <title>IOT Ins Blau</title>
    </head>
    <body>
        <h1>C O N T A C T</h1>
        <img class="menu" src="{{ asset('/img/menu.png') }}" alt="menu"> -->
        <div id="mySidenav" class="sidenav">
         <a class="closebtn">&times;</a>
         <a onClick="aboutMe()" id="overMij" href="#">TIMER</a>
         <a onClick="myProjects()" id="mijnProjecten" href="#">HET&nbsp;PROGRAMMA</a>
         <a onClick="contact()" id="contactOpnemen" href="#">CONTACT</a>
         <img class="logo_wit" src="{{ asset('/img/logo_wit.png') }}" alt="logo Ins Blauwit">
        </div>
        <p class="info_tekst">Bij vragen  of klachten, kan u contact opnemen door de onderstaande informatie:</p>
        <div class="bellen">
           <img class="icoon" src="{{ asset('/img/bellen.png') }}" alt="bellen">
           <p class="tekst">071-5141780</p>
        </div>
        <div class="mail">
          <img class="icoon" src="{{ asset('/img/mail.png') }}" alt="envelop">
          <p class="tekst">info@theaterinsblau.nl</p>
        </div>
        <img class="logo_wit2" src="{{ asset('/img/logo_wit.png') }}" alt="logo Ins Blauwit">
    </body>
</html>
