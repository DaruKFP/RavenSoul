var vec_img = ["logos de video juegos/sweetland.png","logos de video juegos/clash of goblins.png","logos de video juegos/rampage rex.png","logos de video juegos/clash of goblins.png"];
var indice = 0;

function inicio(){
	galeria();
}

function galeria(){
	nextimg();
	setTimeout("galeria()",5000);
}

function previmg(){
	if(indice<1){
		var numig = indice=3;
	}else{
		var numig = indice-=1;
	}
	
	document.getElementById("imagen").src = vec_img[numig];
	
}

function nextimg(){
	if(indice>2){
		var numig = indice=0;
	}else{
		var numig = indice+=1;
	}

	document.getElementById("imagen").src = vec_img[numig];
	if(indice<3){
	document.getElementById("imagen2").src = vec_img[numig+1];
	}else{
	document.getElementById("imagen2").src = vec_img[0];
	}
}