<!DOCTYPE html>
<html>
    <head>
        <title>Modificacion de video juegos</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/>
        <link rel="stylesheet" href="EstiloModJuegos.css">
		<link rel="stylesheet" href="estilo.css">
		<script src="funciones.js"></script>
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/menu.css">

    </head>
    <body>
        <div id="Contenedor">
            <header>
                    <a href="index.html">
                        <article id="art1"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></article>
                    </a>
            </header>
			<?php
            include "barramenu.php";
            ?>
            <div id="Contenido2">
            <form id="Contenido" method="post" action="ModJuegos.php">
                <label id="letras">Id del juego</label>
                <button onclick="funcion()"  class="botoncini" value="1" name="btn">Buscar</button>
                <select id="id" name="id">
				<?php 
				$conexion = mysqli_connect("localhost", "root", "", "minigames");
				$res = mysqli_query($conexion, "select id_juego from juegos;");
				while($lector = mysqli_fetch_array($res)){
				$id = $lector["id_juego"];
				echo"<option value='$id'>$id</option>";
				}
				?>
                </select>
				</form>
            <form method="post" action="php/funciones.php">
				
                <br>
                <br>
                <br>
                 <hr align=center size="2" width="600" color="#0099ff"> 
				 <?php
				$id=$_POST['id'];
				if(isset($_POST['btn'])){
				$bot=$_POST['btn'];
				if($bot == 1){
				$res = mysqli_query($conexion, "select * from juegos where id_juego=$id;");
				if($lector = mysqli_fetch_array($res)){
				$id= $lector[0];
				$tipo_us= $lector[1];
				$nombre= $lector[2];
				$tipo= $lector[3];
				$descripcion= $lector[4];
				$puntuacion= $lector[5];
				$instrucciones= $lector[6];
				$dir_juego= $lector[7];
				$di_imagen= $lector[8];
				$portada= $lector[9];
			
				}
				}else{
				if($_POST['btn1'] == 2){
				$nom=$_POST['nombre'];
				$tip=$_POST['list'];
				$desc=$_POST['descripcion'];
				$punt=$_POST['puntuacion'];
				$inst=$_POST['instrucciones'];
				$direcj=$_POST['dirj'];
				$direci=$_POST['diri'];
				$res = mysqli_query($conexion, "update juegos set nombre=$nom, tipo=$tip,descripcion=$desc, puntuacion=$punt, instrucciones=$inst, dir_juego=$direcj, dir_imagen=$direci");
				}
				}
			 }
				 ?>
                 <section id="form1">
                <label id="letras">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Titulo del juego" value="<?php echo($nombre) ?>"/>
                 </section>
                <br>
                <br>
                <br>
                <hr align=center size="2" width="600" color="#0099ff">
                <section id="form2">       
                <label id="letras">Tipo</label>
                <input list="tipo" name="list" value="<?php echo($tipo)?>"/>
                <datalist id="tipo">
                <option label="Tipo" value="Accion">
                <option label="Tipo" value="Aventura">
                <option label="Tipo" value="Destreza">
                <option label="Tipo" value="Pelea">   
                <option label="Tipo" value="Simulacion">
                </datalist>
                </section>
                <br>
                <br>
                <br>
                <hr align=center size="2" width="600" color="#0099ff">
                <section id="form3">
                <label id="letras"> Descripcion </label>
				<textarea id="descripcion"  onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()"  name="descripcion" style="resize:none;" rows="3" cols="50" placeholder="Descripcion del juego"><?php echo($descripcion)?></textarea>
                </section>
                <br>
                <br>
                <br>
                <hr align=center size="2" width="600" color="#0099ff">
                <section id="form4">
                <label id="letras"> Puntuacion </label>
                <input type="number" id="puntuacion" name="puntuacion" value="<?php echo($puntuacion)?>" placeholder="Puntuacion del juego"/>
                </section>
                <br>
                <br>
                <br>
                <hr align=center size="2" width="600" color="#0099ff">
                <section id="form5">
                <label id="letras"> Instrucciones </label>
				<textarea id="descripcion"  onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()"  name="instrucciones" style="resize:none;" rows="5" cols="60" placeholder="Instrucciones del video juego"><?php echo($instrucciones) ?></textarea>
                </section>
                <br>
                <br>
                <br>
                <hr align=center size="2" width="600" color="#0099ff">
                <section id="form6">
                <label id="letras"> Direccion del juego </label>
                <input type="text" id="dir" name="dirj" placeholder="Direccion del juego" value="<?php echo($dir_juego) ?>"/>
                </section>
                <br>
                <br>
                <!--<form  enctype="multipart/form-data" action="ModJuegos.html" method="POST">
                <input class="cont"  name="uploadedfile" type="file" />
                <input class="botoncini" type="submit" value="Subir archivo" />
                </form>-->
                <br>
                <br>
                <br>
                <hr align=center size="2" width="600" color="#0099ff">
                <label id="letras"> Direccion de la imagen </label>
                <input type="text" id="dir" name="diri" placeholder="Direccion de la imagen" value="<?php echo($di_imagen) ?>"/>
                <br>
                <br>
                <!--<form  enctype="multipart/form-data" action="ModJuegos.html" method="POST">
                <input class="cont"  name="uploadedfile" type="file" />
                <input class="botoncini" type="submit" value="Subir archivo" />
                </form>-->
                <br>
                <br>
                <br>
				<input name="pruebaID" value="<?php echo($id) ?>" style="display:none;">
                <button type="submit" class="botoncini" name="opc" value="4">Modificar</button>
            </form>
            </div>
        </div>
    </body>
</html> 
