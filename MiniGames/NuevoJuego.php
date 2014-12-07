<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Nuevo juego</title>
    <head>
        <title>Modificacion de video juegos</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/>
        <link rel="stylesheet" href="EstiloNuevoJuego.css">
		
  </head>
</head>

<body>
    <div id="caja1">
          <aside id="cajabarra">
                  <header>
                    <a href="index.php">
            <article id="art1"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></article>
         </a>
        </header>
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
              <label>Id juego </label>
                   <input onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" type="text" id="id" name="nick" placeholder="Id del juego" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color:#1140fe;asdas">      
             <br>
             <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d"> 
              <label>Nombre del juego</label>
                   <input onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" type="text" id="id" name="nick" placeholder="Nombre del juego" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color:#1140fe;asdas">      
             <br>
             <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d"> 
               <label>Genero del juego</label>
             <P ALIGN=center>
							<select name="Genero">
								<option value="M">Accion</option>
								<option value="F">Aventura</option>
                                                                <option value="F">Accion</option>
                                                                <option value="F">Destreza</option>
                                                                <option value="F">Pelea</option>
                                                                <option value="F">Simulacion</option>
							</Select>
						 </P> 
             <br>
             <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d"> 
              <label> Descripcion </label>
                <textarea id="descripcion"  onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()"  name="descripcion" style="resize:none;" rows="3" cols="30" placeholder="escribe tu descripcion"></textarea>
             <br>
             <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d">  
              <label> Instrucciones </label>
		<textarea id="descripcion"  onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()"  name="descripcion" style="resize:none;" rows="3" cols="30" placeholder="escribe tu descripcion"></textarea>
             <br>
             <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d">     
              <label>Direccion del juego</label>
                   <input onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" type="text" id="id" name="nick" placeholder="Nombre del juego" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color:#1140fe;asdas">      
            <br>
             <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d">  
    <?php
    $carpetaDestino="juegos/";
    if($_FILES["archivo"]["name"][0])
    {
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
            if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif"|| $_FILES["archivo"]["type"][$i]=="application/x-shockwave-flash"|| $_FILES["archivo"]["type"][$i]=="x-shockwave-flash/flash" || $_FILES["archivo"]["type"][$i]=="image/png")
            {
             if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
                    if(@move_uploaded_file($origen, $destino))
                    {
                        echo "<br>".$_FILES["archivo"]["name"][$i]." Subido ";
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: up/".$user;
                }
            }else{
                echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es un archivo";
            }
        }
    }else{
        echo "<br>No se ha subido ningun archivo";
    }
    ?>
    
 <legend><strong>Subir juego</strong></legend>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="inscripcion">
        <input type="file" name="archivo[]" multiple="multiple">
        <input type="submit" value="Enviar"  class="trig">
    </form>
         <br>
         <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d">  
                   <label>Direccion del juego</label>
                   <input onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" type="text" id="id" name="nick" placeholder="Nombre del juego" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color:#1140fe;asdas">      
          
              <br>
             <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d">  
               <legend><strong>Subir imagen</strong></legend>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="inscripcion">
        <input type="file" name="archivo[]" multiple="multiple">
        <input type="submit" value="Enviar"  class="trig">
    </form>
               <br>
         <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d">  
                   <label>Direccion de la imagen</label>
                   <input onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" type="text" id="id" name="nick" placeholder="Nombre del juego" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color:#1140fe;asdas">      
                     <br>
                     <br>
                   <button type="submit" class="boto" name="opc" value="4">Guardar</button>
         </div>
        
    </div>
</body>
</html>