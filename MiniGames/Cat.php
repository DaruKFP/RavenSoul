<!DOCTYPE html>
<html>
    <head>
        <title>Catalogo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos/estilo_cat.css">
        <link rel="styleshett" href="css/menu.css">
          <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="estilo.css">
          <link rel="stylesheet" href="css/menu.css">

        <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/>
    </head>
    <body>
        <section id="t">
            <section class="bar">
                <article id="art1"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></article>
                <?php
                    include "barramenu.php";
                ?>
        </section>
            <section id="tsup">
                <section id="bus">
                        <input id="txtbus" type="text">
                    <figure id="busico">
                        <img src="botones/google-web-search-256.png" height="100%">
                    </figure>
                </section>
                <section id="cat">
                    <nav class="nav">
                        <li><a href="#">Lista de categorias</a>
                            <ul>
                                <li><a href="#">Accion</a></li>
                                <li><a href="#">Aventura</a></li>
                                <li><a href="#">Destreza</a></li>
                                <li><a href="#">Pelea</a></li>
                                <li><a href="#">Simulacion</a></li>
                            </ul>
                        </li>
                    </nav>
                </section>
            </section>
            <?php
                if(isset($_GET['pos']) || isset($_GET['neg'])){
                    echo("Entro");
                    if(isset($_GET['pos'])){
                        $lik = $_GET['pos'];
                        $puntuacion = 1;
                    }else{
                        $lik = $_GET['neg'];
                        $puntuacion = -1;
                    }
                    $conexion = mysqli_connect("localhost", "root", "", "minigames");
                    $res = mysqli_query($conexion, "select puntuacion from juegos where id_juego='$lik';");
                    if($lector = mysqli_fetch_array($res)){
                        $puntuacion += $lector["puntuacion"];
                        $res = mysqli_query($conexion, "update juegos set puntuacion='$puntuacion' where id_juego=$lik;");
                        header("Location: Cat.php");
                    }
                }
            ?>
            <section id="nuevos">
                <section class="titc">
                    <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos nuevos.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos nuevos.swf">
                            <param name="scale" value="exactfit">
                        </object>
                </section>
                <?php
                    $conexion = mysqli_connect("localhost", "root", "", "minigames");
                    $res = mysqli_query($conexion, "select * from juegos where tipo='Nuevo';");
                    while($lector = mysqli_fetch_array($res)){
                        $imagen = $lector["dir_imagen"];
                        $nombre =$lector["nombre"];
                        $puntuacion = $lector["puntuacion"];
                        $mand = $lector["id_juego"];
                ?>
                <article id="n1">
                    <figure class="db"><img class="dbi" src="<?php echo($imagen) ?>">
                        <section class="punt">
                            <a href="Cat.php?pos=<?php echo ($mand); ?>">
                                <img class="like" src="botones/like.png">
                            </a>
                                <section class="val_punt"><?php echo ($puntuacion); ?></section>
                            <a href="Cat.php?neg=<?php echo ($mand); ?>">
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
            </section>
        <section id="d">
                <aside class="col">
                    <section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos accion.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos accion.swf">
                            <param name="scale" value="exactfit">
                        </object>
                    </section>
                <section class="cont">
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "minigames");
                    $res = mysqli_query($conexion, "select * from juegos where tipo='Accion';");
                    while($lector = mysqli_fetch_array($res)){
                        $imagen = $lector["dir_imagen"];
                        $nombre =$lector["nombre"];
                        $puntuacion = $lector["puntuacion"];
                        $mand = $lector["id_juego"];
                ?>
                        <article class="elcol">
                            <figure><img class="dbi" src="<?php echo($imagen) ?>"></figure>
                            <section class="sub_col">
                                <section class="punt">
                                    <a href="Cat.php?pos=<?php echo ($mand); ?>">
                                        <img class="like" src="botones/like.png">
                                    </a>
                                <section class="val_punt"><?php echo ($puntuacion); ?></section>
                                    <a href="Cat.php?neg=<?php echo ($mand); ?>">
                                        <img class="no_like" src="botones/no like.png">
                                    </a>
                                </section>
                                <section class="jugar">
                                    <a href="<?php echo ("juego.php?nombre=$nombre");?>">
                                        <img class="jugar_btn" src="botones/jugar.png" 
                                        alt="Img 01" >
                                    </a>
                                </section>
                            </section>
                        </article>
                <?php
                    }
                ?>
                </section>
            </aside>
            <aside class="col">
                    <section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos aventura.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos aventura.swf">
                            <param name="scale" value="exactfit">
                        </object>
                    </section>
                <section class="cont">
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "minigames");
                    $res = mysqli_query($conexion, "select * from juegos where tipo='Aventura';");
                    while($lector = mysqli_fetch_array($res)){
                        $imagen = $lector["dir_imagen"];
                        $nombre =$lector["nombre"];
                        $puntuacion = $lector["puntuacion"];
                        $mand = $lector["id_juego"];
                ?>
                        <article class="elcol">
                            <figure><img class="dbi" src="<?php echo($imagen) ?>"></figure>
                            <section class="sub_col">
                                <section class="punt">
                                    <a href="Cat.php?pos=<?php echo ($mand); ?>">
                                        <img class="like" src="botones/like.png">
                                    </a>
                                <section class="val_punt"><?php echo ($puntuacion); ?></section>
                                    <a href="Cat.php?neg=<?php echo ($mand); ?>">
                                        <img class="no_like" src="botones/no like.png">
                                    </a>
                                </section>
                                <section class="jugar">
                                    <a href="<?php echo ("juego.php?nombre=$nombre");?>">
                                        <img class="jugar_btn" src="botones/jugar.png" 
                                        alt="Img 01" >
                                    </a>
                                </section>
                            </section>
                        </article>
                <?php
                    }
                ?>
                </section>
                </aside>
            <aside class="col">
                    <section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos destreza.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos destreza.swf">
                            <param name="scale" value="exactfit">
                        </object>
                    </section>
                <section class="cont">
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "minigames");
                    $res = mysqli_query($conexion, "select * from juegos where tipo='Destreza';");
                    while($lector = mysqli_fetch_array($res)){
                        $imagen = $lector["dir_imagen"];
                        $nombre =$lector["nombre"];
                        $puntuacion = $lector["puntuacion"];
                        $mand = $lector["id_juego"];
                ?>
                        <article class="elcol">
                            <figure><img class="dbi" src="<?php echo($imagen) ?>"></figure>
                            <section class="sub_col">
                                <section class="punt">
                                    <a href="Cat.php?pos=<?php echo ($mand); ?>">
                                        <img class="like" src="botones/like.png">
                                    </a>
                                <section class="val_punt"><?php echo ($puntuacion); ?></section>
                                    <a href="Cat.php?neg=<?php echo ($mand); ?>">
                                        <img class="no_like" src="botones/no like.png">
                                    </a>
                                </section>
                                <section class="jugar">
                                    <a href="<?php echo ("juego.php?nombre=$nombre");?>">
                                        <img class="jugar_btn" src="botones/jugar.png" 
                                        alt="Img 01" >
                                    </a>
                                </section>
                            </section>
                        </article>
                <?php
                    }
                ?>
                </section>
                </aside>
            <aside class="col">
                    <section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos pelea.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos pelea.swf">
                            <param name="scale" value="exactfit">
                        </object>
                    </section>
                <section class="cont">
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "minigames");
                    $res = mysqli_query($conexion, "select * from juegos where tipo='Pelea';");
                    while($lector = mysqli_fetch_array($res)){
                        $imagen = $lector["dir_imagen"];
                        $nombre =$lector["nombre"];
                        $puntuacion = $lector["puntuacion"];
                        $mand = $lector["id_juego"];
                ?>
                        <article class="elcol">
                            <figure><img class="dbi" src="<?php echo($imagen) ?>"></figure>
                            <section class="sub_col">
                                <section class="punt">
                                    <a href="Cat.php?pos=<?php echo ($mand); ?>">
                                        <img class="like" src="botones/like.png">
                                    </a>
                                <section class="val_punt"><?php echo ($puntuacion); ?></section>
                                    <a href="Cat.php?neg=<?php echo ($mand); ?>">
                                        <img class="no_like" src="botones/no like.png">
                                    </a>
                                </section>
                                <section class="jugar">
                                    <a href="<?php echo ("juego.php?nombre=$nombre");?>">
                                        <img class="jugar_btn" src="botones/jugar.png" 
                                        alt="Img 01" >
                                    </a>
                                </section>
                            </section>
                        </article>
                <?php
                    }
                ?>
                </section>
                </aside>
            <aside class="col">
                    <section class="tit">
                        <object class="swf_cat" type="application/x-shockwave-flash" data="flash/juegos de simulacion.swf">
                            <param name="quality" value="high">
                            <param name="movie" value="flash/juegos de simulacion.swf">
                            <param name="scale" value="exactfit">
                        </object>
                    </section>
                <section class="cont">
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "minigames");
                    $res = mysqli_query($conexion, "select * from juegos where tipo='Simulacion';");
                    while($lector = mysqli_fetch_array($res)){
                        $imagen = $lector["dir_imagen"];
                        $nombre =$lector["nombre"];
                        $puntuacion = $lector["puntuacion"];
                        $mand = $lector["id_juego"];
                ?>
                        <article class="elcol">
                            <figure><img class="dbi" src="<?php echo($imagen) ?>"></figure>
                            <section class="sub_col">
                                <section class="punt">
                                    <a href="Cat.php?pos=<?php echo ($mand); ?>">
                                        <img class="like" src="botones/like.png">
                                    </a>
                                <section class="val_punt"><?php echo ($puntuacion); ?></section>
                                    <a href="Cat.php?neg=<?php echo ($mand); ?>">
                                        <img class="no_like" src="botones/no like.png">
                                    </a>
                                </section>
                                <section class="jugar">
                                    <a href="<?php echo ("juego.php?nombre=$nombre");?>">
                                        <img class="jugar_btn" src="botones/jugar.png" 
                                        alt="Img 01" >
                                    </a>
                                </section>
                            </section>
                        </article>
                <?php
                    }
                ?>
                </section>
                </aside>
        </section>
        <footer id="terminos">
                <font color="#f0f0f6" size="2" face="Myriad Pro,Bold MS Sans Serif">terminos y usos de condiciones politica y privacidad © 2014 diseñado por minigames  <address>www.minigames.com </address> </font>
        </footer>
    </section>
    </body>
</html>