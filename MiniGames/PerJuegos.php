<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Juegos</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="EstiloPerUsuario.css">
          <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="css/menu.css">
		<script src="funciones.js"></script>
        <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/> 
    </head>
    <body>
     <div id="caja1">
          <header>
                <article id="art1"><a href="index.php"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></a></article>
            </header>
            <?php
                include "barramenu.php";
            ?>
            <section id="cajo">
               
               <aside id="uno1">
                   <a href="NuevoJuego.php">     <img class="img" src="botones/agregar juegos.png" width="200" height="170" alt="Img01" >
                    </a>
                    <h1>Agregar Juego</h1>
                    
                </aside>
                <aside id="dos2">
                    <a href="ModJuegos.php">  <img class="img" src="botones/modificar juegos.png" width="200" height="200" alt="Img01" >
                    </a>
                        <h1>Modificar Juego</h1>
                  
                </aside>
            </section>
            
        </div>
    </body>
</html>
