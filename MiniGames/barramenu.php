<div id="cubierta"></div>
<div id="log">
    <form method="post" action="php/funciones.php">
        <p id="espacio" >Nick:<input id="nick" name="nick" placeholder="Nombre de usuario" type="text"><br/></p>
        <p>Contraseña: <input id="contra" name="contra" placeholder="Clave de seguridad" type="password"></p>
        <button id="boton" type="submit" name="opc" value="1" >Iniciar</button>
        <button  id="boton2" type="button" onclick="cerrar()">Cancelar</button>
    </form>
</div>
<div id="ini_error" class="inierror">
    <img class="errorbtn" src="botones/error.png" width="50" height="50">
    <p><h1>ERROR: Usuario o contraseña incorrecta</h1></p>
    <button class="botonerror" type="button" onclick="cerrar_error('ini_error')">Cancelar</button>
</div>

<div id="guard_error" class="inierror">
    <img class="errorbtn" src="botones/error.png" width="50" height="50">
    <p><h1>ERROR: Al intentar guardar juego</h1></p>
    <button class="botonerror" type="button" onclick="cerrar_error2('guard_error')">Cancelar</button>
</div>

<div id="user_error" class="inierror">
    <img class="errorbtn" src="botones/error.png" width="50" height="50">
    <p><h1>ERROR: Usuario ya existente</h1></p>
    <button class="botonerror" type="button" onclick="cerrar_error2('user_error')">Cancelar</button>
</div>

<div id="user2_error" class="inierror">
    <img class="errorbtn" src="botones/error.png" width="50" height="50">
    <p><h1>ERROR: No se ha registrado correctamente el usuario</h1></p>
    <button class="botonerror" type="button" onclick="cerrar_error2('user2_error')">Cancelar</button>
</div>

<div id="contacto_error" class="inierror">
    <img class="errorbtn" src="botones/error.png" width="50" height="50">
    <p><h1>ERROR: Tiene que llenar correctamente todos los campos</h1></p>
    <button class="botonerror" type="button" onclick="cerrar_error2('contacto_error')">Cancelar</button>
</div>

<?php
    $tipo=0;
    session_start();
    if(isset($_SESSION['inicio'])){
        $usuario = $_SESSION['inicio'];
        $conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
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
                <li><a href="Accion.php?tipoc=Accion">Categorias</a></li>
                <li><a class="hsubs" href="Cat.php">Catalogo</a></li>
                <li><a class="hsubs" href="blog.php">Comentarios</a></li>
                <li><a class="hsubs" href="contacto.php">Contacto</a></li>
                <li><a href="#">Radio</a></li>
                <li><a href="acercade.php">Acerca de</a></li>
                <div id="lavalamp"></div>
            </ul>
       </div>
<?php
    }else{
?>
        <!--<aside id="cajabarra">-->
            <div class="container">

                <ul id="nav2">
                    <li><a href="Accion.php?tipoc=Accion">Categorias</a></li>
                    <li><a class="hsubs" href="Cat.php">Catalogo</a></li>
                    <li><a class="hsubs" href="blog.php">Comentarios</a></li>
                    <li><a class="hsubs" href="contacto.php">Contacto</a></li>
                    <li><a href="#">Radio</a></li>
                    <li><a href="acercade.php">Acerca de</a></li>
                    <li><a>Administrador</a>
                       <ul class="subs">
                           <li><a href="PerJuegos.php">Juegos</a></li>
                           <li><a href="PerUsuario.php">Usuarios</a></li>
                       
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
                        <script type="text/javascript">msj_error("ini_error")</script>
<?php
                    break;
                    case 2:
?>
                        <script type="text/javascript">msj_error("guard_error");</script>
<?php
                    break;
					case 3:
?>
                        <script type="text/javascript">msj_error("user_error");</script>
<?php
                    break;
					case 4:
?>
                        <script type="text/javascript">msj_error("user2_error");</script>
<?php
                    break;
					case 5:
?>
                        <script type="text/javascript">msj_error("contacto_error");</script>
<?php
                    break;
                }
            }
            }else{
                $conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
                $res = mysqli_query($conexion, "select tipo_de_usuario from usuarios where nick='$usuario';");

                if($tipo == 1){
                    $ft = "background: url(usuarios/user1.gif) no-repeat;background-size: 100%;";
					
                }else{
                    $ft = "background: url(usuarios/iconuser2.png) no-repeat;background-size: 100%;";
                }
                    echo ("<li id='login2'><section id='img_log' style='$ft'></section><section id='usua'>$usuario</section></li>");
				?><li><section><form action="php/funciones.php" method="post"><button type="submit" name="opc" value="8">cerrar</button></form></section></li>
				<?php
            }
?>
		
    </li>
</section>