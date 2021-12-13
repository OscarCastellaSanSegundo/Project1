<?php
    session_start();
?>

<script>
//MENU RESPONSIVE
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
});


/** 
 * VIDEOS NAVBAR
 * CONTENIDOS 
 */

let videoSlideActive = document.querySelector(".video-slide");
const inicio = document.getElementById('inicio')
const centro = document.getElementById("centro");
const metodologia = document.getElementById("metodologia");
const grados = document.getElementById("grados");
const equipo = document.getElementById("equipo");

const contHome = document.getElementById('content-home')
const contMeto = document.getElementById("content-meto")
const contCentro = document.getElementById("content-centro")
const contGrados = document.getElementById("content-grados")
const contEquipo = document.getElementById("content-equipo")
let contentActivo = document.querySelector(".content");

const videoHome = document.getElementById('video-home')
const videoMeto = document.getElementById("video-metodologia")
const videoCentro = document.getElementById("video-centro")
const videoGrados = document.getElementById("video-grados")
const videoEquipo = document.getElementById("video-equipo")

let cambioColor = document.querySelector(".home")

inicio.addEventListener('click', () => {
    cambioColor.style.background = "#d42b15"
    videoSlideActive.classList.remove('active')
    videoHome.classList.add('active')
    contentActivo.classList.remove('active')
    contHome.classList.add('active')
    contentActivo = contHome;
    videoSlideActive = videoHome;
})

metodologia.addEventListener('click', () => {
    cambioColor.style.background = "#59199e"
    videoSlideActive.classList.remove('active')
    videoMeto.classList.add('active')
    contentActivo.classList.remove('active')
    contMeto.classList.add('active')
    contentActivo = contMeto;
    videoSlideActive = videoMeto;
})

centro.addEventListener('click', () => {
    cambioColor.style.background = "#f77e1b"
    videoSlideActive.classList.remove('active')
    videoCentro.classList.add('active')
    contentActivo.classList.remove('active')
    contCentro.classList.add('active')
    contentActivo = contCentro;
    videoSlideActive = videoCentro
})

grados.addEventListener('click', () => {
    cambioColor.style.background = "#199e3d"
    videoSlideActive.classList.remove('active')
    videoGrados.classList.add('active')
    contentActivo.classList.remove('active')
    contGrados.classList.add('active')
    contentActivo = contGrados;
    videoSlideActive = videoGrados
})

equipo.addEventListener('click', () => {
    cambioColor.style.background = "#2696E9"
    videoSlideActive.classList.remove('active')
    videoEquipo.classList.add('active')
    contentActivo.classList.remove('active')
    contEquipo.classList.add('active')
    contentActivo = contEquipo;
    videoSlideActive = videoEquipo;
})

let toggle = document.querySelector('.toggle');
let menuContacto = document.querySelector('.contacto');
toggle.onclick= function(){
    menuContacto.classList.toggle('active')
}
</script>