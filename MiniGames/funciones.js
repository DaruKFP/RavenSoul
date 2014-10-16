var vecI = ["imagenes/1.jpg","imagenes/2.jpg","imagenes/3.gif","imagenes/4.png","imagenes/5.jpg"];
var cont = 0;

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