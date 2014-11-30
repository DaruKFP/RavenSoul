<html>
<head>
	<title>pagina juegos</title>
        <link rel="stylesheet" type="text/css" href="estilojuego.css">
		<script src="carrucel2.js"></script>
<<<<<<< HEAD
        
=======
                <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/>
			<script src="jquery.js"></Script>
		    <script type="text/javascript" src="slick.min.js"></script>
			<link rel="stylesheet" type="text/css" href="slick.css"/>
>>>>>>> origin/master
</head>
<body onload="inicio()">
	<div id="caja">
             <section id="tsup">
                <header id="th">
                </header>
                <section id="bus">
                        <input id="txtbus" type="text">
                        <a href="index.php"> <article id="logo"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></article></a>
                    <figure id="busico">
                        <img src="botones/google-web-search-256.png" height="100%">
                    </figure>
                </section>
        </section>
            			
			
            <section id="contenedor">
            <aside id="caja2">
                <?php 
			if(isset($_GET['nombre'])){
			$nombre=$_GET['nombre'];
			$conexion = mysqli_connect("localhost", "root", "", "minigames");
			$res = mysqli_query($conexion, "select * from juegos where nombre='$nombre';");
			if($lector = mysqli_fetch_array($res)){
			$id = $lector["id_juego"];
			$descripcion = $lector["descripcion"];
			$puntuacion = $lector["puntuacion"];
			$instrucciones = $lector[6];
			$direccion = $lector["dir_juego"];
			$direccion_imagen = $lector["dir_imagen"];
			}
			
                 echo"   <img class='portadalogo' src='$direccion_imagen'>";
          
                  echo"  <h1>Descripcion:</h1>";
                  echo"  <h4>$descripcion</h4>";
                  echo"  <h1>Instrucciones:</h1>";
                  echo"  <h4>$instrucciones</h4>";
					}
			?>
            </aside>
                <div id="sugerencias" class="c">
            <h1>Juegos que te pueden interesar</h1>
			<?php
			$conexion = mysqli_connect("localhost", "root", "", "minigames");
			$res = mysqli_query($conexion, "select dir_imagen,nombre from juegos;");
			while($lector = mysqli_fetch_array($res)){
			$portada = $lector["dir_imagen"];
			$nombre =$lector["nombre"];
            echo"<div style='width:200px; height:200px;><a href='juego.php?nombre=$nombre'><img id='imagen' class='suge' src='$portada'></a></div>";
			}
				?>
                </div>
<script>
$('.c').slick({
autoplay:true,
autoplaySpeed: 1500
});
arrows: true;
  </script>
<aside id="caja3">
    
<header id="cajatres2">
<article>
    <object class="juego" type="application/x-shockwave-flash" 
    data="<?php echo($direccion)?>">
    <param name="quality" value="hight">
            </object>
</article>

</header>

</aside>
</section>
<h3>Queremos saber tu opinion</h3>
<h3>Puntua</h3>
<form class="nada">
    <?php
    include "php/cargar.php";
    cargar($id);
    ?>


</form>
<section>
        <?php
            //crea_com();
        include "php/nuevo.php";
        ?>
    </section>
</div>

            
	


</body>

</html>