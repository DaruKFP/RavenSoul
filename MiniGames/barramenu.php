<div id="cubierta"></div>
<div id="log">
    <form method="post" action="php/funciones.php">
<<<<<<< HEAD
        <p id="espacio" >Nick:<input id="nick" name="nick" placeholder="Nombre de usuario" type="text"><br/></p>
        <p>Contraseña: <input id="contra" name="contra" placeholder="Clave de seguridad" type="password"></p>
        <button id="boton" type="submit" name="opc" value="1" >Iniciar</button>
=======
        <p id="espacio" >Nick:<input onkeydown="chequearr('0')" onkeypress="chequear('0')" onchange="prueba2()" id="nick" name="nick" placeholder="Nombre de usuario" type="text"><br/></p>
        <p>Contraseña: <input onkeydown="chequearr('0')" onkeypress="chequear('0')" onchange="prueba2()" id="contra" name="contra" placeholder="Clave de seguridad" type="password"></p>
        <button id="boton" type="submit" name="opc" value="1" style="display:none;">Iniciar</button>
>>>>>>> 87e841513a7adfce796ca49982873b5f5f5f35e9
        <button  id="boton2" type="button" onclick="cerrar()">Cancelar</button>
    </form>
</div>
<div id="ini_error">
<<<<<<< HEAD
<img class="errorbtn" src="botones/error.png" width="50" height="50">
    <p><h1>ERROR: Usuario o contraseña incorrecta</h1></p>
    <button class="botonerror" type="button" onclick="cerrar_error()">Cancelar</button>
=======
    <p><h1>ERROR: Usuario o contraseña incorrecta</h1></p>
    <button type="button" onclick="cerrar_error()">Cancelar</button>
>>>>>>> 87e841513a7adfce796ca49982873b5f5f5f35e9
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
<<<<<<< HEAD
                <li><a class="hsubs" href="#">Comentarios</a></li>
=======
                <li><a class="hsubs" href="#">Blog</a></li>
>>>>>>> 87e841513a7adfce796ca49982873b5f5f5f35e9
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
<<<<<<< HEAD
                <ul id="nav2">
                    <li><a href="#">Categorias</a></li>
                    <li><a class="hsubs" href="#">Catalogo</a></li>
                    <li><a class="hsubs" href="#">Comentarios</a></li>
=======
                <ul id="nav">
                    <li><a href="#">Categorias</a></li>
                    <li><a class="hsubs" href="#">Catalogo</a></li>
                    <li><a class="hsubs" href="#">Blog</a></li>
>>>>>>> 87e841513a7adfce796ca49982873b5f5f5f35e9
                    <li><a class="hsubs" href="contacto.html">Contacto</a></li>
                    <li><a href="#">Radio</a></li>
                    <li><a href="acerca de.html">Acerca de</a></li>
                    <li><a href="acerca de.html">Administrador</a></li>
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
<<<<<<< HEAD
                            alert("llego  aqi");
                        </script>
=======
                        </script>
                        <div id="ini_err">
                            <p><h1>ERROR: llene bien todos los campos</h1></p>
                            <button type="button" onclick="cerrar_error()">Cancelar</button>
                        </div>
>>>>>>> 87e841513a7adfce796ca49982873b5f5f5f35e9
<?php
                    break;
                }
            }
            }else{
                $conexion = mysqli_connect("localhost", "root", "", "minigames");
                $res = mysqli_query($conexion, "select tipo_de_usuario from usuarios where nick='$usuario';");
<<<<<<< HEAD
                if($tipo == 1){
                    $ft = "background: url(usuarios/user1.gif) no-repeat;background-size: 100%;";
                }else{
                    $ft = "background: url(usuarios/iconuser2.png) no-repeat;background-size: 100%;";
=======
                if($res == "admin" || $res == "prog"){
                    $ft = "background: url(usuarios/user1.gif) no-repeat";
                }else{
                    $ft = "background: url(usuarios/iconuser2.png) no-repeat";
>>>>>>> 87e841513a7adfce796ca49982873b5f5f5f35e9
                }
                    echo ("<li id='login2'><section id='img_log' style='$ft'></section><section id='usua'>$usuario</section></li>");
            }
?>
    </li>
</section>