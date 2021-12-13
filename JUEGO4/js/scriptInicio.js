
let instruccionesLeidas;

function verInstrucciones() {
    let cambiarInstrucciones;
    let cambiarInicio;
    let cambiarTaparJugar;
    let cambiarGiff;
    instruccionesLeidas = true;

    cambiarGiff = document.getElementById ("giffInstrucciones");
    cambiarTaparJugar = document.getElementById ("taparJugar");
    cambiarInstrucciones = document.getElementById ("instrucciones");
    cambiarInicio = document.getElementById ("menuInicio");

    cambiarGiff.style.zIndex = "10";
    cambiarTaparJugar.style.zIndex = "-20";
    cambiarInstrucciones.style.zIndex = "20";
    cambiarInicio.style.zIndex = "-20";
}

function volverInicio() {
    let cambiarInstrucciones;
    let cambiarInicio;
    let cambiarGiff;

    cambiarGiff = document.getElementById ("giffInstrucciones");
    cambiarInstrucciones = document.getElementById ("instrucciones");
    cambiarInicio = document.getElementById ("menuInicio");

    cambiarGiff.style.zIndex = "-20";
    cambiarInstrucciones.style.zIndex = "-20";
    cambiarInicio.style.zIndex = "20";
}

function cambiarDificultad() {
    let cambiarDificultad1;
    let cambiarInicio;
    let cambiarTaparJugar;

    cambiarTaparJugar = document.getElementById ("taparJugar");
    cambiarDificultad1 = document.getElementById ("menuDificultad");
    cambiarInicio = document.getElementById ("menuInicio");

    cambiarTaparJugar.style.zIndex = "-25";
    cambiarDificultad1.style.zIndex = "20";
    cambiarInicio.style.zIndex = "-20";
}

function actualizarDificultad() {
    document.cookie = "dificultad=4"
    salirDificultad();
}

function actualizarDificultad2() {
    document.cookie = "dificultad=8"
    salirDificultad();
}

function actualizarDificultad3() {
    document.cookie = "dificultad=16"
    salirDificultad();
}

function salirDificultad() {
    let cambiarDificultad;
    let cambiarInicio;
    let cambiarTaparJugar;

    if (instruccionesLeidas == true) {
    } else {
        cambiarTaparJugar = document.getElementById ("taparJugar");
        cambiarTaparJugar.style.zIndex = "-25";
    }
    
    cambiarDificultad = document.getElementById ("menuDificultad");
    cambiarInicio = document.getElementById ("menuInicio");

    cambiarDificultad.style.zIndex = "-20";
    cambiarInicio.style.zIndex = "20";
}
