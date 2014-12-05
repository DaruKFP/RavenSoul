

<html>
    <head>
        <title>Mini Games</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="css/estiloredes.css">
        <script src="funciones.js"></script>
        <script src="/presentacion.js"></script>
			<script src="jquery.js"></Script>
		    <script type="text/javascript" src="slick.min.js"></script>
				<link rel="stylesheet" type="text/css" href="slick.css"/>
				
        <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/> 
    </head>
    <body>
        <div id="caja1">
            <header>
                <article id="art1"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></article>
            </header>
            <?php
                include "barramenu.php";
            ?>
            <div id="Redesymas">
                <ul id="navigationMenu">
                    <li>
                        <a class="services" href="https://www.facebook.com/ravensoulChID?fref=ts"><span>Facebook</span></a>
                    </li>
                </ul>
            </div>
            <div id="presentacion" class="c"> 
			<?php
			$conexion = mysqli_connect("localhost", "root", "", "minigames");
			$res = mysqli_query($conexion, "select portada,nombre from juegos;");
			while($lector = mysqli_fetch_array($res)){
			$portada = $lector["portada"];
			$nombre =$lector["nombre"];
			echo "<div><a href='juego.php?nombre=$nombre'><img src='$portada'  style='height:100%; width:100%;'></a></div>";
			}
			?>
			  
            </div>
			<script>
$('.c').slick({
autoplay:true,
autoplaySpeed: 1500
arrows: true;
  </script>
  
            <section id="list">
                <section id="izq">
				<?php
				$cont=0;
			$conexion = mysqli_connect("localhost", "root", "", "minigames");
			$res = mysqli_query($conexion, "select dir_imagen,nombre from juegos;");
			while($lector = mysqli_fetch_array($res)){
			$cont++;
			$portada = $lector["dir_imagen"];
			$nombre = $lector["nombre"];
			if($cont%2){ 
			echo "<article id='art1'><ul><li><a href='juego.php?nombre=$nombre'><img src='$portada' width='220' height='300' style='width:200px; height:100px;'></a></li> </ul> </article>";
         }else{
                echo"</section>";
                echo"<section id='der'>";
                echo"<article id='art3'><ul><li><a href='juego.php?nombre=$nombre'><img src='$portada' width='220' height='300' style='width:200px; height:100px;'></a></li></ul></article>";      
				echo" </section>";
			}
			}
			?>
            </section>
            <!--<section>
                <li>
					<?php
						//session_start();
						//if(!isset($_SESSION['inicio'])){
					?>
					<li id="login">
						<a class="nuevo" onclick="abrir()" > <img src="imagenes/Up-Arrow-Icon.png" width="40" height="40" alt="Img 05" ></a>
						<a class="nuevo" href="nuevo.php"><img src="imagenes/Add-User-512.png" width="40" height="40" alt="Img 06" ></a>
					</li>
					<?php
							//if(isset($_POST['regreso_error'])){
								//$err = $_POST['regreso_error'];
								//switch($err){
									//case 1:
					?>
										<script type="text/javascript">msj_error()</script>
					<?php
									//break;
									//case 2:
					?>
										<script>
											var cub = document.getElementById("cubierta");
											cub.style.display = "block";
										</script>
										<div id="ini_err">
											<p>
												<h1>ERROR: llene bien todos los campos</h1>
											</p>
											<button type="button" onclick="cerrar_error()">Cancelar</button>
										</div>
					<?php
									//break;
								//}
							//}
						/*}else{
							$conexion = mysqli_connect("localhost", "root", "", "minigames");
							$res = mysqli_query($conexion, "select tipo_de_usuario from usuarios where nick='$usuario';");
							if($res == "admin" || $res == "prog"){
								$ft = "background: url(usuarios/user1.gif) no-repeat";
							}else{
								$ft = "background: url(usuarios/iconuser2.png) no-repeat";
							}
							echo ("<li id='login2'><section id='img_log' style='$ft'></section><section id='usua'>$usuario</section></li>");
						}*/
					?>
                </li>
            </section>-->
            <footer id="terminos">
                <font color="#f0f0f6" size="2" face="Myriad Pro,Bold MS Sans Serif">terminos y usos de condiciones politica y privacidad © 2014 diseñado por minigames  <address>www.minigames.com </address> </font>
            </footer>
        </div> 
    </body>
</html>
