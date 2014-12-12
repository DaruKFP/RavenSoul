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

function cerrar_error2(nombID){
	var cubi = document.getElementById("cubierta");
    cubi.style.display = "none";
    var er = document.getElementById(nombID);
    er.style.display = "none";
}

function msj_error(nombID){
	var cubi = document.getElementById("cubierta");
    cubi.style.display = "block";
    var er = document.getElementById(nombID);
    er.style.display = "block";
}

function prueba(){

	//location.href="php/funciones.php";
	//var r1 = document.getElementById("nick").value;
	//var r2 = document.getElementById("nombre").value;
	var r3 = document.getElementById("contra").value;
	var r4 = document.getElementById("rcontra").value;
	var r5 = document.getElementById("email").value;
	var r6 = document.getElementById("remail").value;
	//var r7 = document.getElementById("fecha_nacimiento").value;
	//var r8 = document.getElementById("descripcion").value;
	//var b1 = document.getElementById("bt");
	
	//if(r1.length>3 && r2.length>4 && r3.length>3 && r4.length>3 && r5.length>8 && r6.length>8 && r7.length!="" && r8.length>4){
		
		/*var v1 = false;
		var v2 = false;*/
		if(r3 == r4){
			document.getElementById("contras1").style.color = "white";
			document.getElementById("contras2").style.color = "white";
			//v1 = true;
		}else{
			document.getElementById("contras1").style.color = "red";
			document.getElementById("contras2").style.color = "red";
			//v1 = false;
		}
		if(r5 == r6){
			document.getElementById("correos1").style.color = "white";
			document.getElementById("correos2").style.color = "white";
			//v2 = true;
		}else{
			document.getElementById("correos2").style.color = "red";
			document.getElementById("correos1").style.color = "red";
			//v2 = false;
		}
		/*if(v1==true && v2==true){
			b1.style.display = "block";
		}*/
	//}else{
		//b1.style.display = "none";
	//}
}

/*function prueba2(){
	var r1 = document.getElementById("nick").value;
	var r2 = document.getElementById("contra").value;
	var b1 = document.getElementById("boton");
	
	if(r1.length>2 && r2.length>2){
		b1.style.display = "block";
	}else{
		b1.style.display = "none";
	}
}*/
/*function prueba3(){
//prompt("entro","");
	var r1 = document.getElementById("nombre").value;
	var r2 = document.getElementById("email").value;
	var r3 = document.getElementById("tema").value;
	var r4 = document.getElementById("comentario").value;
	var b1 = document.getElementById("boton");
//	prompt("r1 "+r1+" r2 "+r2+" r3 "+r3+" r4 "+r4);
	
	if(r1.length>4 && r2.length>8 && r3.length>4 && r4.length>4){
		b1.style.display = "block";
	}else{
		b1.style.display = "none";
	}
}*/

/*function chequearr(p) {

	if(event.keyCode==8){
		switch(p){
			case '0':
				prueba2();
			break;
			case '1':
				prueba();
			break;
			case '2':
				prueba3();
			break;
		}
	}
	if(event.keyCode==127){
		prompt("se dio delete xD","");
	}
}*/

function chequear() {
	var k = event.charCode;  //String.fromCharCode(event.charCode);
	if( !(k==34 || k==39 || k==61 || k==40 || k==41 || k==91 || k==93 ||k==123 || k==125) ){
		/*switch(p){
			case '0':
				prueba2();
			break;
			case '1':
				prueba();
			break;
			case '2':
				prueba3();
			break;
		}*/
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