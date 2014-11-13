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

function cerrar_error(){
	var men = document.getElementById("ini_error");
	var men2 = document.getElementById("log");
	men.style.display= "none";
	men2.style.display= "block";
}

function msj_error(){
	var cubi = document.getElementById("cubierta");
    cubi.style.display = "block";
    var er = document.getElementById("ini_error");
    er.style.display = "block";
}

function prueba(cad){
	//location.href="php/funciones.php";
	var r1 = document.getElementById(cad).value;
	var b1 = document.getElementById("bt");
	if(r1.length>4){
		b1.style.display = "block";
	}else{
		b1.style.display = "none";
	}
}


function chequear() {
var k = event.charCode;  //String.fromCharCode(event.charCode);

if( (k>64 && k < 91) || (k>96 && k < 123) || (k>47 && k <58)){

}else{
event.returnValue=false;
}
}

/*function iniF(){
	var usuario = document.getElementById("nUsuario");
	var cub = document.getElementById("cubierta");
	var men = document.getElementById("log");
	cub.style.display = "none";
    men.style.display= "none";
    var log = document.getElementById("login");
    log.innerHTML = usuario.value;;
}*/