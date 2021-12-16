let juego1;
let juego2;
let juego3;
let cookieJuego2 = readCookie( "juego2" );
let cookieJuego3 = readCookie( "juego3" );
let cookieJuego4 = readCookie( "juego4" ); 

console.log(cookieJuego4);

juego2 = document.getElementsByClassName("juego2Giff");
juego3 = document.getElementsByClassName("juego3Giff");
juego4 = document.getElementsByClassName("juego4Giff");


if (cookieJuego2 == true) {
    juego2[0].style.filter = "grayscale(0) contrast(0) brightness(0)";
}

if (cookieJuego3 == true) {
    juego3[0].style.filter = "grayscale(0) contrast(0) brightness(0)";
}

if (cookieJuego4 == true) {
    juego4[0].style.filter =
    juego4[0].style.filter = "grayscale(0) contrast(0) brightness(0)";
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