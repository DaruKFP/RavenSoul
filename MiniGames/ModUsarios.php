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
        <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/>
    </head>
    <body>
       <div id="caja1">
                <header>
                    <a href="index.php">
            <article id="art1"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></article>
         </a>
        </header>
                
                 <aside id="cajabarra">
                
       <div class="container">

            <ul id="nav">
                <li><a href="#">Categorias</a></li>
                <li><a class="hsubs" href="#">Catalogo</a>
                 
                </li>
                <li><a class="hsubs" href="#">Blog</a>
                    
                </li>
                <li><a class="hsubs" href="contacto.html">Contacto</a>
                 
                </li>
                <li><a href="#">Radio</a></li>
              
                <li><a href="acerca de.html">Acerca de</a></li>
                <div id="lavalamp"></div>
            </ul>
       </div>
                                      
            </aside>
           <div id="presentacion">
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
