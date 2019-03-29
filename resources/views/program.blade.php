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
      <div class="program">
        <h1 class="naam_voorstelling">BLACK DOG</h1>
        <img class="foto_voorstelling" src="{{ asset('/img/blackdog.png') }}" alt="BLACK DOG">
        <img class="menu" src="{{ asset('/img/menu.png') }}" alt="menu"> -->
        <div id="mySidenav" class="sidenav">
         <a class="closebtn">&times;</a>
         <a onClick="aboutMe()" id="overMij" href="#">TIMER</a>
         <a onClick="myProjects()" id="mijnProjecten" href="#">HET&nbsp;PROGRAMMA</a>
         <a onClick="contact()" id="contactOpnemen" href="#">CONTACT</a>
         <img class="logo_wit" src="{{ asset('/img/logo_wit.png') }}" alt="logo Ins Blauwit">
        </div>
        <p class="samenvatting">Sinds enkele jaren weten we dat je hersenen pas volledig ontwikkeld zijn rond je vijfentwintigste.
          Tot dan heb je een excuus om te zoeken, worstelen, afbreken en weer opbouwen. De puberteit ontgroeien is
          als wakker worden uit een hormonale bad trip. Omdat we allemaal ervaringsdeskundigen zijn, doen we de
          worsteling van jonge mensen snel af als groeipijn. Het hoort er nou eenmaal bij. Maar, soms is er meer
          aan de hand. Is het “gewoon de leeftijd” – of is het niet zo simpel? Black Dog is een interdisciplinaire
          voorstelling over het leven met een brein dat nog in ontwikkeling is. Moderne dans, beeldende kunst en
          elektronische muziek komen samen in een performance vol chaos en destructie, maar ook heftig verlangen.
          De dansers gaan dan weer een interactie, dan weer een confrontatie aan met elkaar, het decor en de muziek.
          Een voorstelling over adolescentie, voor en door volwassenen.
</p>
    </body>
</html>
