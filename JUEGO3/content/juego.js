
window.onload = function(){

    //variables 

    var juego = false;

    var puntuacion = 0;

    let eliminados = document.getElementById('eliminados');
    let salvados = document.getElementById('salvados');
    let perdidos = document.getElementById('perdidos');

     eliminados = 0;
     salvados = 0;
     perdidos = 0;

    let contador = 10;

    const botonIniciar = document.getElementById("empezar");
    const siguiente = document.getElementById("siguiente");
    
    
    //variables obstaculos
    let obstaculo1 = document.getElementById("paso1");
    obstaculo1.style.left = '890px';
    obstaculo1.style.top = '170px';
    let obstaculo2 = document.getElementById("paso2");
    obstaculo2.style.left = '890px';
    obstaculo2.style.top = '320px';
    let obstaculo3 = document.getElementById("paso3");
    obstaculo3.style.left = '890px';
    obstaculo3.style.top = '230px';
    //variables alumnos 
    let alumno1 = document.getElementById('alumno1');
    alumno1.style.left = '0px';
    alumno1.style.top = '450px';
    let alumno2 = document.getElementById("alumno2");
    alumno2.style.left = '75px';
    alumno2.style.top = '450px';

    let salon = document.getElementById('salon');
   
    // variables jugador y movimineto teclado
    let jugador = document.getElementById("jugador");
    let izquierda = 'ArrowLeft';
    let derecha = 'ArrowRight';
    let abajo = 'ArrowDown';
    let arriba = 'ArrowUp';
    
    
    // variables para detector de colisiones
    let jugadorw,jugadorh,jugadorx,jugadory;
    let obstaculo1w , obstaculo1h, obstaculo1x, obstaculo1y;
    let obstaculo2w , obstaculo2h, obstaculo2x, obstaculo2y;
    let obstaculo3w , obstaculo3h, obstaculo3x, obstaculo3y;
    let alumno1w,alumno1h,alumno1x,alumno1y;
    let alumno2w,alumno2h,alumno2x,alumno2y;
    let salonw,salonh,salonx,salony;


    //velociddades en las que se mueven los divs
    var velocidad = 25;
    
  
    if(juego == false){
        swal("Bienvenido, en este juego debes intentar que los intrusos no nos quiten las practicas " +
        "\n las flechas del teclado son tus movimientos\n ¡MUCHA SUERTE!")
    }

    document.addEventListener("keydown",function(event){ 

        if (juego == true){
        
            if (event.key == derecha){
                var Left = parseInt(window.getComputedStyle(jugador).getPropertyValue("left"));
                if (Left < 890){
                    var nuevapos = Left + velocidad;
                    jugador.style.left = nuevapos + "px"; 
                    jugador.style.backgroundImage = "url('img/alumno.png')"; 
                    
                }
            }
        
            if (event.key == izquierda){
                var Left = parseInt(window.getComputedStyle(jugador).getPropertyValue("left"));
                if (Left > 22){
                    var nuevapos = Left - velocidad;
                    jugador.style.left = nuevapos + "px";
                    jugador.style.backgroundImage = "url('img/alumno.png')"; 
                }
            }
        
            if (event.key == abajo){
                var Top   = parseInt(window.getComputedStyle(jugador).getPropertyValue("top"));
                if (Top < 430){
                    var nuevapos = Top + velocidad;
                    jugador.style.top = nuevapos + "px";
                    jugador.style.backgroundImage = "url('img/alumno.png')"; 
                }
            }
        
            if (event.key == arriba){
                var Top   = parseInt(window.getComputedStyle(jugador).getPropertyValue("top"));
                if (Top > 15){
                    var nuevapos = Top - velocidad;
                    jugador.style.top = nuevapos + "px";
                    jugador.style.backgroundImage = "url('img/alumno.png')"; 
                }
            }
        }     
    });
  
    setInterval (function(){ //  els obstacles surtin en un interval de temps 

        if(juego == true){//condicion para que se pare el juego 

            //parseamos valores  
            var obstaculo1iz = parseInt( obstaculo1.style.left); 
            var obstaculo2iz = parseInt( obstaculo2.style.left);
            var obstaculo3iz = parseInt(obstaculo3.style.left);
            var posiciontopnueva1;
            var posiciontopnueva2;
            var posiciontopnueva3;


            if(  obstaculo1iz <= 890 && obstaculo1iz > 0){
              
                 posiciontopnueva1 =  obstaculo1iz - 4;
                 obstaculo1.style.left = posiciontopnueva1 +'px';
                
            }else if (obstaculo1iz <= 0 ){
                obstaculo1.style.left = '890px';
                obstaculo1.style.top = '210px';
                // obstaculo1.style.top = numAleatorio() + 'px';
            }
           
            if(  obstaculo2iz <= 890 && obstaculo2iz > 0){
              
                posiciontopnueva2 =  obstaculo2iz - 8;
                obstaculo2.style.left = posiciontopnueva2 +'px';
               
           }else if (obstaculo2iz <= 0 ){
               obstaculo2.style.left = '890px';
               obstaculo2.style.top = '320px';
            //    obstaculo2.style.top = numAleatorio() + 'px';
           } 

           if(  obstaculo3iz <= 890 && obstaculo3iz > 0){
              
            posiciontopnueva3 =  obstaculo3iz - 6;
            obstaculo3.style.left = posiciontopnueva3 +'px';
           
            }else if (obstaculo3iz <= 0 ){
                 obstaculo3.style.left = '890px';
                obstaculo3.style.top = '230px';
                //    obstaculo3.style.top = numAleatorio() + 'px';
       } 
        }    

    }, 15);

   setInterval (function alumnos(){//interval alumnos 
    if(juego == true){

        var alumno1top = parseInt(alumno1.style.top);
        var alumno2top = parseInt( alumno2.style.top);
        
        if(alumno1top <= 450 && alumno1top > 0){
              
            var nuevaposicion1 =  alumno1top - 6;
            alumno1.style.top= nuevaposicion1 +'px';
           
       }else if (alumno1top <= 0){
            alumno1.style.left = '50px';
            alumno1.style.top = '500px';
          
       }

       if(alumno2top <= 450 && alumno2top > 0){

        var nuevaposicion2 = alumno2top - 8;
        alumno2.style.top= nuevaposicion2 +'px';
        
       }else if (alumno2top <= 0){
        alumno2.style.left = '150px';
        alumno2.style.top = '500px';

       }

    }
   }, 30);
    
   setInterval (function deteccioncolision(){ // deteccion de los obstaculos con el jugador y el alumno
               
               
    jugadorw = jugador.offsetWidth;
    jugadorh = jugador.offsetHeight;
    jugadorx = jugador.offsetLeft;
    jugadory = jugador.offsetTop;

    obstaculo1w = obstaculo1.offsetWidth;
    obstaculo1h = obstaculo1.offsetHeight;
    obstaculo1x = obstaculo1.offsetLeft;
    obstaculo1y = obstaculo1.offsetTop;

    obstaculo2w = obstaculo2.offsetWidth;
    obstaculo2h = obstaculo2.offsetHeight;
    obstaculo2x = obstaculo2.offsetLeft;
    obstaculo2y = obstaculo2.offsetTop;

    obstaculo3w = obstaculo3.offsetWidth;
    obstaculo3h = obstaculo3.offsetHeight;
    obstaculo3x = obstaculo3.offsetLeft;
    obstaculo3y = obstaculo3.offsetTop;

    alumno1w = alumno1.offsetWidth;
    alumno1h = alumno1.offsetHeight;
    alumno1x = alumno1.offsetLeft;
    alumno1y = alumno1.offsetTop;

    alumno2w = alumno2.offsetWidth;
    alumno2h = alumno2.offsetHeight;
    alumno2x = alumno2.offsetLeft;
    alumno2y = alumno2.offsetTop;

    if(juego == true){// condicio para iniciar 
    // comprobamos que alla colision obstaculo1
    if ((jugadorx + jugadorw) > jugadorx && jugadorx < ( obstaculo1x + obstaculo1w ) 
    && (jugadory + jugadorh) > obstaculo1y && jugadory < ( obstaculo1y +  obstaculo1h)){
        // hacemos que al hacer colision desaparezca
        eliminados++;
         obstaculo1.style.top = '960px';
         obstaculo1.style.left = numAleatorio() + 'px';
        
       
    }

     if ((jugadorx + jugadorw) > obstaculo2x && jugadorx < (obstaculo2x + obstaculo2w) 
     && (jugadory + jugadorh) > obstaculo2y && jugadory < (obstaculo2y + obstaculo2h)){
           
            eliminados++;
           obstaculo2.style.top = '960px';
           obstaculo2.style.left = numAleatorio() + 'px';
          
     }

     
      if ((jugadorx + jugadorw) > obstaculo3x && jugadorx < (obstaculo3x + obstaculo3w) 
      && (jugadory + jugadorh) > obstaculo3y && jugadory < (obstaculo3y + obstaculo3h)){
        
            eliminados++;
           obstaculo3.style.top = '960px';
           obstaculo3.style.left = numAleatorio() + 'px';
        
        
      }
        //colision alumnos + obstaculos 

      //var topalumno = parseInt(alumno1.style.top);

        if ((alumno1x + alumno1w ) > obstaculo1x  &&  alumno1x < (obstaculo1x + obstaculo1w)
        && (alumno1y + alumno1h) > obstaculo1y && alumno1y < (obstaculo1y + obstaculo1h)) {

            perdidos++;
            alumno1.style.top = '450px';
            
        }
        if ((alumno1x + alumno1w ) > obstaculo2x  &&  alumno1x < (obstaculo2x + obstaculo2w)
        && (alumno1y + alumno1h) > obstaculo2y && alumno1y < (obstaculo2y + obstaculo2h)) {

            perdidos++;
            alumno1.style.top = '450px';
           
   
        }
        if ((alumno1x + alumno1w ) > obstaculo3x  &&  alumno1x < (obstaculo3x + obstaculo3w)
        && (alumno1y + alumno1h) > obstaculo3y && alumno1y < (obstaculo3y + obstaculo3h)) {

            perdidos++;
            alumno1.style.top = '450px';
            
        }
        //alumno2
        if ((alumno2x + alumno2w ) > obstaculo1x  &&  alumno2x < (obstaculo1x + obstaculo1w)
        && (alumno2y + alumno2h) > obstaculo1y && alumno2y < (obstaculo1y + obstaculo1h)) {

            perdidos++;
            alumno2.style.top = '450px';
            
        }
        if ((alumno2x + alumno2w ) > obstaculo2x  &&  alumno2x < (obstaculo2x + obstaculo2w)
        && (alumno2y + alumno2h) > obstaculo2y && alumno2y < (obstaculo2y + obstaculo2h)) {

            perdidos++;
            alumno2.style.top = '450px';
            
        }
        if ((alumno2x + alumno2w ) > obstaculo3x  &&  alumno2x < (obstaculo3x + obstaculo3w)
        && (alumno2y + alumno2h) > obstaculo3y && alumno2y < (obstaculo3y + obstaculo3h)) {

            perdidos++;
            alumno2.style.top = '450px';
           
        }
          
    }
});

    setInterval (function deteccionSalon() {

        alumno1w = alumno1.offsetWidth;
        alumno1h = alumno1.offsetHeight;
        alumno1x = alumno1.offsetLeft;
        alumno1y = alumno1.offsetTop;

        alumno2w = alumno2.offsetWidth;
        alumno2h = alumno2.offsetHeight;
        alumno2x = alumno2.offsetLeft;
        alumno2y = alumno2.offsetTop;


        salonw = salon.offsetWidth;
        salonh = salon.offsetHeight;
        salonx = salon.offsetLeft;
        salony = salon.offsetTop;

        if(juego == true){

            if ((alumno1x + alumno1w) > alumno1x && alumno1x < ( salonx + salonw ) 
            && (alumno1y + alumno1h) > salony && alumno1y < ( salony +  salonh)){
                // hacemos que al hacer colision desaparezca
                 salvados++;
                 alumno1.style.top = '450px';   
            }
            
            if ((alumno2x + alumno2w) > alumno2x && alumno2x < ( salonx + salonw ) 
            && (alumno2y + alumno2h) > salony && alumno2y < ( salony +  salonh)){
                // hacemos que al hacer colision desaparezca
                salvados++;
                 alumno2.style.top = '450px';   
            }
        
        }
        
    });

    function numAleatorio(){ // funcio per que els productes es moguin aleatoriament 
        var numAleatorio = Math.floor(Math.random() *5 );
 
        switch (numAleatorio){
 
         case 0 : var posicionleft = 0;
         break;
 
         case 1  : var posicionleft = 160;
         break;
 
         case 2  : var posicionleft = 320;
         break;
 
         case 3  : var posicionleft = 480;
         break;
 
         case 4  : var posicionleft = 640;
         break;         
        }
 
             return posicionleft;
    }    
    
   //Creamos el contador para que el jugador tenga 1 minuto de tiempo y para ello repetimos la funcion en un intervalo de 1000ms (1 segundo)
    var tiempojuego = setInterval(function(){
    document.getElementById("contador").innerHTML = "<p><strong>Tiempo <br>" + contador + "</strong></p>";
    if(juego == true){
        contador = contador - 1;
        if (contador < 0){
            final();
            clearInterval(tiempojuego);
           
        }
    }else{
        juego = false;
    }
    
}, 1000);
    
intervalpuntuacion = setInterval (function(){//funcio per a la puntuacio 
    document.getElementById("salvados").innerHTML = "<p> salvados " + salvados + "</p>";
    document.getElementById("eliminados").innerHTML = "<p> eliminados " + eliminados + "</p>";
    document.getElementById("perdidos").innerHTML = "<p> perdidos " + perdidos + "</p>";
    document.getElementById("puntuacion").innerHTML = "<p> puntuacion <br>" + puntuacion + "</p>";
    puntuacion = salvados + eliminados *30 ;
    if(juego == false){
        // if(puntuacion >= 150){
        //     // alert("fin de juego");
            final();
            clearInterval(intervalpuntuacion);
            
        // }
    }{
        juego == true;
    }  
},100);
    
             function final(){ //funcion para terminar juego 
                if (contador <= 0){
                    swal("Juego finalizado , el tiempo a terminado" + "puntuacion: " + puntuacion);
                   
                      juego = false;
                      siguiente.style.visibility = "visible";
                }
              
                
            }
            botonIniciar.addEventListener("click", function(){//funcion para empezar juego 
                juego = true;
                botonIniciar.style.visibility = "hidden";
                siguiente.style.visibility = "hidden";
            })
    

           
}
