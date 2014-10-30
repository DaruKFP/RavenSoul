var vecI = ["imagenes/1.jpg","imagenes/2.jpg","imagenes/3.gif","imagenes/4.png","imagenes/5.jpg"];
var cont = 0;

//Scroll arriba
 $(document).ready(function(){
  
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
  
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
  
    });

function Inicio(){
	carrucel();
}

function carrucel(){
	var cuad = document.getElementById("presentacion");
	cuad.style.backgroundImage = "url("+vecI[cont]+")";
	cont++;
	if(cont > 4){
		cont = 0;
	}
	setTimeout("Inicio()",5000);
}

function clc1(){
	cont--;
	if(cont<0){
		cont = 4;
	}
	carrucel();
}

function ent1(){
	var im = document.getElementById("minicajas1");

}

function abrir(){
	var cub = document.getElementById("cubierta");
	var lg = document.getElementById("log");
	cub.style.display = "block";
	lg.style.display = "block";
}

function cerrar(){
	var cub = document.getElementById("cubierta");
	var men = document.getElementById("log");
	cub.style.display = "none";
    men.style.display= "none";
}

function iniF(){
	var usuario = document.getElementById("nUsuario");
	var cub = document.getElementById("cubierta");
	var men = document.getElementById("log");
	cub.style.display = "none";
    men.style.display= "none";
    var log = document.getElementById("login");
    log.innerHTML = usuario.value;;
}