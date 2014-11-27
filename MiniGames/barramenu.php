<!--
<html>
    <head>
        <title>Barra de menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilobarramenu.css">
    </head>
    <body>
        <!--
        Esta barra de menu sera la que los administradores les aparecera
        ->
        
        <div id="caja1">
            <header>
           
         
        </header>
            -->
<?php
    session_start();
    if(!isset($_SESSION['inicio'])){
?>
        <div class="container">
            <ul id="nav">
                <li><a href="juego.php">Categorias</a></li>
                <li><a class="hsubs" href="#">Catalogo</a></li>
                <li><a class="hsubs" href="#">Blog</a></li>
                <li><a class="hsubs" href="contacto.php">Contacto</a></li>
                <li><a href="#">Radio</a></li>
                <li><a href="acerca de.html">Acerca de</a></li>
                <div id="lavalamp"></div>
            </ul>
       </div>
<?php
    }else{
        $usuario = $_SESSION['inicio'];
        $conexion = mysqli_connect("localhost", "root", "", "minigames");
        $res = mysqli_query($conexion, "select tipo_de_usuario from usuarios where nick='$usuario';");
        $lector = mysqli_fetch_array($res);
?>
        <aside id="cajabarra">
            <div class="container">
                <ul id="nav">
                    <li><a href="#">Categorias</a></li>
                    <li><a class="hsubs" href="#">Catalogo</a></li>
                    <li><a class="hsubs" href="#">Blog</a></li>
                    <li><a class="hsubs" href="contacto.html">Contacto</a></li>
                    <li><a href="#">Radio</a></li>
                    <li><a href="acerca de.html">Acerca de</a></li>
                    <li><a href="acerca de.html">Administrador</a></li>
                    <div id="lavalamp"></div>
                </ul>
            </div>
        </aside>
<?php
    }
?>
            

            <!--
        </div>
    </body>
</html>
-->