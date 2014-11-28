<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilocontac.css">
		<script src="funciones.js"></script>
        <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/>
    </head>
    <body>
            <div id="caja1">
                <header>
                    <a href="index.html">
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
                
                <div id="cajacontacto">
					<form method="post" name="Formulario" action="php/funciones.php" >
                    <fieldset id="mensaje1">
         
                    <legend><strong>Formulario de contacto</strong></legend>
                    <p>
                        <label>Nombre: </label>
                        <input type="text" onkeydown="chequearr('2')" onkeypress="chequear('2')" onchange="prueba3()" id="nombre" name="nombre" placeholder="nombre" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color:#484c4c;asdas">
                    </p>
                    <p>
                        <label>Email: </label>
                        <input type="text" onkeydown="chequearr('2')" onkeypress="chequear('2')" onchange="prueba3()" id="email" name="email" placeholder="Email" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color: #484c4c;asdas">
                    </p>
                      <p>
                        <label>Tema: </label>
                        <input type="text" onkeydown="chequearr('2')" onkeypress="chequear('2')" onchange="prueba3()" id="tema" name="tema" placeholder="Tema" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color: #484c4c;asdas">
                    </p>
                    </fieldset>
                    <div id='botonaceptar'>
                       <button style="display:none" name="opc" id="boton" value="3" type="submit"><img src="imagenes/guardar.png"  width="100" height="40" alt="Img01" ></button>
                    </div>
                    <fieldset id="mensaje">
                    <legend ><strong>Mensaje</strong></legend>
                    <p>
                    <form>
<font face="Comic Sans MS" size="3">
<textarea name="comentario" id="comentario" onkeydown="chequearr('2')" onkeypress="chequear('2')" onchange="prueba3()" cols="40" rows="5" style="width:400px;height:300px;font-size:12px;font-family:Comic Sans MS;background-image:url(images/1.jpg);color:#484c4c;asdas">
</textarea>
</font>
</form>
                    </fieldset>
                </div>
				</form>
            </div>
            
            
            <div id="cajanetwork">
                <article id="art3"><ul> <li><img src="imagenes/redessociales/tweet.png" width="400" height="320" alt="Img 03" ></li> </ul></article>
            </div>
            <footer id="terminos">
                
                <font color="#f0f0f6" size="2" face="Myriad Pro,Bold MS Sans Serif">terminos y usos de condiciones politica y privacidad © 2014 diseñado por minigames  <address>www.minigames.com </address> </font>
               
            </footer>
        </div>
         
    </body>
</html>
