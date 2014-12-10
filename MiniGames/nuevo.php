<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registrar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilologin.css">
        <link rel="stylesheet" href="css/menu.css">
		<script src="funciones.js"></script>
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
                
            <?php
                include "barramenu.php";
            ?>
                       
            </aside>
            
            
       
            <div id="presentacion">
			<form method="post" name="Formulario" action="php/funciones.php">
                <legend><strong>Registrar</strong></legend>
                    <p>
                        <label>Nick </label>
                        <input onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" type="text" id="nick" name="nick" placeholder="Nick" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color:#1140fe;asdas">
                  
                    <div id="fuente">     
             <br>
             <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d"> 
		<p>
                        <label>Nombre</label>
                        <input type="text" onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" name="nombre" id="nombre" placeholder="Nombre de usuario" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color: #1140fe;asdas">
                    </p>	 
         
                         <br>
                         
                          <HR ALIGN=center size="2" width="600" color="#6f9c9d"> 
                          <p>
                        <label>Sexo</label>
                        
                    </p>
                         <P ALIGN=center>
							<select name="sexo">
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</Select>
						 </P>
						 <HR ALIGN=center size="2" width="600" color="#6f9c9d">
			<br>
                        <p>
                        <label id="contras1">Contraseña</label>
                        <input type="password" onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" name="contra" id="contra" placeholder="Ingrese contraseña" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color: #1140fe;asdas">
                    </p>	
                        
             <br>
              <HR ALIGN=center size="2" width="600" color="#6f9c9d">
              <p>
              <label id="contras2">Reingrese la contraseña</label>
                        <input type="password" onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" name="rcontra" id="rcontra" placeholder="Para asegurar coinsidencias" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color: #1140fe;asdas">
                    </p>	
                        
             <br>
             <HR ALIGN=center size="2" width="600" color="#6f9c9d">
               <p>
                   <label id="correos1">Correo Electronico</label>
                        <input type="text" onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" name="email" id="email" placeholder="ingrese su email" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color: #1140fe;asdas">
                    </p>	
                        
             <br>
             <HR ALIGN=center size="2" width="600" color="#6f9c9d">
              <p>
                   <label id="correos2">Reingrese el Correo Electronico</label>
                        <input type="text" onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" name="remail" id="remail" placeholder="Para asegurar coinsidencias" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color: #1140fe;asdas">
                    </p>

				<HR ALIGN=center size="2" width="600" color="#6f9c9d">
              <p>
                   <label>Fecha de nacimiento</label>
                        <input type="date" onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="dd-mm-aaaa" cols="40" rows="5" style="width:300px;height:20px;font-size:12px;font-family:Comic Sans MS;color: #1140fe;asdas">
                    </p>
					<HR ALIGN=center size="2" width="600" color="#6f9c9d">
					<label> Descripcion </label>
						<textarea id="descripcion"  onkeydown="chequearr('1')" onkeypress="chequear('1')" onchange="prueba()"  name="descripcion" style="resize:none;" rows="3" cols="30" placeholder="escribe tu descripcion"></textarea>
                        </div>
             
             <div id="botonaceptar">
             <button type="submit" name="opc" id="bt" value="2"><img src="imagenes/registrar.png" width="95" height="40" alt="Img01"></button>
             <!-- style="display:none;" -->
             </div>
            </div>
		
			
              <footer id="terminos">
                
                <font color="#f0f0f6" size="2" face="Myriad Pro,Bold MS Sans Serif">terminos y usos de condiciones politica y privacidad © 2014 diseñado por minigames  <address>www.minigames.com </address> </font>
               
            </footer>
              </form>
        </div>
      </body>
    
</html>
