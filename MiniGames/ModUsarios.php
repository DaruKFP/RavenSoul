<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Modificar usuario</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilomodusua.css">
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
           <div id="presentacionMod">
               <br>
			    <form Method="post" action="php/funciones.php"> 
                <label class="letra" for="nam">Nick:</label>
				<select id="nick" name="nick">
				<?php 
				$conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
				$res = mysqli_query($conexion, "select nick from usuarios;");
				while($lector = mysqli_fetch_array($res)){
				$id = $lector["nick"];
				echo"<option value='$id'>$id</option>";
				}
				?>
                </select>
               
               <br>
               <br>
               <HR ALIGN=center size="2" width="600" color="#0099cc">
                <br>
                <br>
				
                 <label class="letra" for="nam">Rango</label>
                <select name="Rango" id="Rango">
                <option value="Admin">Administrador</option>
                <option value="reg">Usuario</option>
                </Select>
                <button id="botn" type="submit" name="opc" value="6"> Modificar </button>
               
                 <HR ALIGN=center size="2" width="600" color="#0099cc">
                 <br>
                 <br>
				 
                  <label class="letra" for="nam">Eliminar</label>
				  <label class="letra" for="nam"><?php echo($id) ?></label>
                  <button id="botn" type="submit" name="opc" value="5">Eliminar</button>
				  </form>
                  <br>
                  <br>
                  <br>
                  <br>
                 <HR ALIGN=center size="2" width="600" color="#0099cc">
                 
                 <br>
               
           </div>
       </div>
    </body>
</html>
