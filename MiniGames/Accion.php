<!DOCTYPE html>
<html>
    <head>
        <title>Accion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos/estilo_cat.css">
        <link rel="stylesheet" href="estilos/estilo_accion.css">
        <link rel="styleshett" href="css/menu.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="css/menu.css">
        <script src="funciones.js"></script>
        <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/>
    </head>
    <body>
        <section id="t">
        <section class="bar">
                <a href="index.php">
                    <article class="art1"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></article>
                </a>
            <section class="bar1">
                <?php
                    include "barramenu.php";
                ?>
            </section>
        </section>
            <section id="tsup">
					<?php 
					if(isset($_GET['tipoc'])){
						$tipo = $_GET['tipoc'];
					}
					?>
				<form method="post" id="for" action="Accion.php?tipoc=<?php echo($tipo) ?>">
                <section id="bus">
                        <input name="txtbus" id="txtbus" type="text" value="">
						<button type="submit" id="busico">
                    <figure id="busico2">
                        <img src="botones/google-web-search-256.png">
                    </figure>
						</button>
                </section>
				</form>
                <section id="cat">
                    <nav class="nav">
                        <li><a>Lista de categorias</a>
                            <ul>
                                <li><a href="Accion.php?tipoc=Accion">Accion</a></li>
                                <li><a href="Accion.php?tipoc=Aventura">Aventura</a></li>
                                <li><a href="Accion.php?tipoc=Destreza">Destreza</a></li>
                                <li><a href="Accion.php?tipoc=Pelea">Pelea</a></li>
                                <li><a href="Accion.php?tipoc=Simulacion">Simulacion</a></li>
                            </ul>
                        </li>
                    </nav>
                </section>
        </section>
        <section id="cp">
			<?php 
				if(isset($_GET['tipoc'])){
					$tipo = $_GET['tipoc'];
					switch($tipo){
						case "Accion":
						?>
						<section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos accion.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos accion.swf">
                            <param name="scale" value="exactfit">
                        </object>
						</section>
						<?php
						break;
						case "Pelea":
						?>
						<section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos pelea.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos pelea.swf">
                            <param name="scale" value="exactfit">
                        </object>
						</section>
						<?php
						break;
						case "Destreza":
						?>
						<section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos destreza.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos destreza.swf">
                            <param name="scale" value="exactfit">
                        </object>
						</section>
						<?php
						break;
						case "Aventura":
						?>
						<section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos aventura.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos aventura.swf">
                            <param name="scale" value="exactfit">
                        </object>
						</section>
						<?php
						break;
						case "Simulacion":
						?>
						<section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos de simulacion.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos de simulacion.swf">
                            <param name="scale" value="exactfit">
                        </object>
						</section>
						<?php
						break;
					}
				}
			?>
			<?php
                if(isset($_GET['pos']) || isset($_GET['neg'])){
                    if(isset($_GET['pos'])){
                        $lik = $_GET['pos'];
                        $puntuacion = 1;
                    }else{
                        $lik = $_GET['neg'];
                        $puntuacion = -1;
                    }
                    $conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
                    $res = mysqli_query($conexion, "select puntuacion from juegos where id_juego='$lik';");
                    if($lector = mysqli_fetch_array($res)){
                        $puntuacion += $lector["puntuacion"];
                        $res = mysqli_query($conexion, "update juegos set puntuacion='$puntuacion' where id_juego=$lik;");
                        echo("<form method='post' action='Accion.php?tipoc=$tipo'><button style='display:none;' type='submit' id='bot' name='regreso_error'>Iniciar</button></form>");
						echo("<script>var b = document.getElementById('bot');b.click();</script>");
                    }
                }
            ?>
                <section class="filas">
				<?php
					if(isset($_POST['txtbus'])){
						$busc =  $_POST['txtbus'];
					}else{
						$busc = "";
					}
                    $conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
                    $res = mysqli_query($conexion, "select * from juegos where tipo='$tipo' and nombre like '%$busc%';");
                    while($lector = mysqli_fetch_array($res)){
                        $imagen = $lector["dir_imagen"];
                        $nombre =$lector["nombre"];
                        $puntuacion = $lector["puntuacion"];
                        $mand = $lector["id_juego"];
                ?>
                <article id="n1">
                    <figure class="db"><img class="dbi" src="<?php echo($imagen) ?>">
                        <section class="punt">
                            <a href="Accion.php?tipoc=<?php echo ($tipo); ?>&pos=<?php echo ($mand); ?>">
                                <img class="like" src="botones/like.png">
                            </a>
                                <section class="val_punt"><?php echo ($puntuacion); ?></section>
                            <a href="Accion.php?tipoc=<?php echo ($tipo); ?>&neg=<?php echo ($mand); ?>">
                                <img class="no_like" src="botones/no like.png">
                            </a>
                        </section>
                        <section class="jugar">
                            <a href="<?php echo ("juego.php?nombre=$nombre");?>">
                                <img class="jugar_btn" src="botones/jugar.png" alt="Img 01" >
                            </a>
                        </section>
                    </figure>
                </article>
                <?php
                    }
                ?>
                    <!--<article>
                        <figure class="db"><img class="dbi" src="10684233_292673977594746_227506832_n.jpg"><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src="10684233_292673977594746_227506832_n.jpg"><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src="10684233_292673977594746_227506832_n.jpg"><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src="10684233_292673977594746_227506832_n.jpg"><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src="10684233_292673977594746_227506832_n.jpg"><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src="10684233_292673977594746_227506832_n.jpg"><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src="10684233_292673977594746_227506832_n.jpg"><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>
                    <article>
                        <figure class="db"><img class="dbi" src=""><figcaption><a>Jugar</a></figcaption></figure>
                    </article>-->
                </section>
          

        </section>
    <footer id="terminos">
                
                <font color="#f0f0f6" size="2" face="Myriad Pro,Bold MS Sans Serif">terminos y usos de condiciones politica y privacidad © 2014 diseñado por minigames  <address>www.minigames.com </address> </font>
               
    </footer>
    </body>
</html>