<div id="cubierta"></div>
<div id="log">
    <form method="post" action="php/funciones.php">
        <p id="espacio" >Nick:<input id="nick" name="nick" placeholder="Nombre de usuario" type="text"><br/></p>
        <p>Contraseña: <input id="contra" name="contra" placeholder="Clave de seguridad" type="password"></p>
        <button id="boton" type="submit" name="opc" value="1" >Iniciar</button>
        <button  id="boton2" type="button" onclick="cerrar()">Cancelar</button>
    </form>
</div>
<div id="ini_error">
    <img class="errorbtn" src="botones/error.png" width="50" height="50">
    <p><h1>ERROR: Usuario o contraseña incorrecta</h1></p>
    <button class="botonerror" type="button" onclick="cerrar_error()">Cancelar</button>
</div>
<?php
    $tipo=0;
    session_start();
    if(isset($_SESSION['inicio'])){
        $usuario = $_SESSION['inicio'];
        $conexion = mysqli_connect("localhost", "root", "", "minigames");
        $res = mysqli_query($conexion, "select tipo_de_usuario from usuarios where nick='$usuario';");
        if($lector = mysqli_fetch_array($res)){
            if($lector[0]=="prog" || $lector[0]=="admin"){
                $tipo = 1;
            }
        }
?>
<?php
    }
    if($tipo == 0){
?>
        <div class="container">
            <ul id="nav">
                <li><a href="juego.php">Categorias</a></li>
                <li><a class="hsubs" href="#">Catalogo</a></li>
                <li><a class="hsubs" href="#">Comentarios</a></li>
                <li><a class="hsubs" href="contacto.php">Contacto</a></li>
                <li><a href="#">Radio</a></li>
                <li><a href="acerca de.html">Acerca de</a></li>
                
                <div id="lavalamp"></div>
            </ul>
       </div>
<?php
    }else{
?>
        <!--<aside id="cajabarra">-->
            <div class="container">

                <ul id="nav2">
                    <li><a href="#">Categorias</a></li>
                    <li><a class="hsubs" href="#">Catalogo</a></li>
                    <li><a class="hsubs" href="#">Comentarios</a></li>
                    <li><a class="hsubs" href="contacto.html">Contacto</a></li>
                    <li><a href="#">Radio</a></li>
                    <li><a href="acerca de.html">Acerca de</a></li>
                    <li><a href="acerca de.html">Administrador</a>
                       <ul class="subs">
                           <li><a href="ModJuegos.php">Juegos</a></li>
                        <li><a href="#">Usuarios</a></li>
                       
                    </ul>
                    </li>
                    <div id="lavalamp"></div>
                </ul>
            </div>
        <!--</aside>-->
<?php
    }
?>
<section>
    <li>
<?php
        if(!isset($_SESSION['inicio'])){
?>
            <li id="login">
                <a class="nuevo" onclick="abrir()" > <img src="imagenes/Up-Arrow-Icon.png" width="40" height="40" alt="Img 05" ></a>
                <a class="nuevo" href="nuevo.php"><img src="imagenes/Add-User-512.png" width="40" height="40" alt="Img 06" ></a>
            </li>
<?php
            if(isset($_POST['regreso_error'])){
                $err = $_POST['regreso_error'];
                switch($err){
                    case 1:
?>
                        <script type="text/javascript">msj_error()</script>
<?php
                    break;
                    case 2:
?>
                        <script>
                            var cub = document.getElementById("cubierta");
                            cub.style.display = "block";

                            alert("llego  aqi");
                        </script>
<?php
                    break;
                }
            }
            }else{
                $conexion = mysqli_connect("localhost", "root", "", "minigames");
                $res = mysqli_query($conexion, "select tipo_de_usuario from usuarios where nick='$usuario';");

                if($tipo == 1){
                    $ft = "background: url(usuarios/user1.gif) no-repeat;background-size: 100%;";
					
                }else{
                    $ft = "background: url(usuarios/iconuser2.png) no-repeat;background-size: 100%;";
                }
                    echo ("<li id='login2'><section id='img_log' style='$ft'></section><section id='usua'>$usuario</section></li>");
				?><li></section><section><button onclick="<?php session_destroy(); echo'location.reload();';?> ">cerrar</button></section></li>
				<?php
            }
?>
		
    </li>
</section>