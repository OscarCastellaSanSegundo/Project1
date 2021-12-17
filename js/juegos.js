let juego2;
let juego3;
let juego4;
let cookieJuego2 = readCookie( "juego2" );
let cookieJuego3 = readCookie( "juego3" );
let cookieJuego4 = readCookie( "juego4" ); 


juego2 = document.getElementsByClassName("juego2Giff");
juego3 = document.getElementsByClassName("juego3Giff");
juego4 = document.getElementsByClassName("juego4Giff");


if (cookieJuego2 == true) {
    juego2[0].style.filter = "grayscale(0) contrast(1) brightness(1)";
}

if (cookieJuego3 == true) {
    juego3[0].style.filter = "grayscale(0) contrast(1) brightness(1)";
}

if (cookieJuego4 == true) {
    juego4[0].style.filter = "grayscale(0) contrast(1) brightness(1)";
    
}

function readCookie(name) {

    var nameEQ = name + "="; 
    var ca = document.cookie.split(';');
  
    for(var i=0;i < ca.length;i++) {
  
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) {
        return decodeURIComponent( c.substring(nameEQ.length,c.length) );
      }
  
    }
  
    return null;
  
}

function comprobarSiPuedeJugarJuego2(){
  if (cookieJuego2 == true) {
    window.location.href='../JUEGO2/index.php';
  }
}

function comprobarSiPuedeJugarJuego3(){
  if (cookieJuego3 == true) {
    window.location.href='../JUEGO3/index.php';
  }
}

function comprobarSiPuedeJugarJuego4(){
  if (cookieJuego4 == true) {
    window.location.href='../JUEGO4/inicio.php';
  }
}