window.onload = function() {
  var minuten = 9;
  var seconden = 10;
  var timer = document.getElementById('timer');
  setInterval(function() {
    document.getElementById("timer").innerHTML = minuten + " : " + seconden;
    seconden--;
      // if (seconden < 10 && seconden >= 00){
      // seconden = "0" +seconden;

      if (minuten == 0 && seconden == 00) {
       // timer.style.color="red";
       window.location.href = "{ url(../chair)";

    if (seconden == 00) {
      minuten--;
      seconden = 59;
      if (minuten == 0) {
        // minuten = 2;
    }

    }
  }
}, 1000);

  function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
  }

  function closeNav() {
      document.getElementById("mySidenav").style.width = "0%";
  }

  document.getElementsByClassName('menu_start')[0].addEventListener("click", openNav);
  document.getElementsByClassName('menu')[0].addEventListener("click", openNav);
  document.getElementsByClassName('closebtn')[0].addEventListener("click", closeNav);

}
