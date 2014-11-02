

<html>
    <head>
        <title>Mini Games</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="css/estiloredes.css">
        <script src="funciones.js"></script>
        <script src="/jquery.js"></script>
        <script src="/presentacion.js"></script>
    </head>
    <body onload="Inicio()">
        <div id="caja1">
            <header>
            <article id="art1"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></article>
         
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
             <div id="Redesymas">
       
<ul id="navigationMenu">
    
    <li>
	     <a class="services" href="https://www.facebook.com/ravensoulChID?fref=ts">
            <span>Facebook</span>
         </a>
    </li>
  

</ul>
</div>   
            
   
                <div id="presentacion"> 
                    <div id="minicajas1" onclick="clc1()"></div>
                    <div id="minicajas2" onclick="clc1()"></div>
                </div>
             <section id="list">
                
               <section id="izq">
                   
                   <article id="art1"> <ul> <li><img src="imagenes/c1.png" width="220" height="300" alt="Img 01" ></li> </ul> </article>
                   <article id="art2"> <ul> <li><img src="imagenes/c2.png" width="220" height="300" alt="Img 02" ></li></ul> </article>
                  
               </section>
                    <section id="der">
                        <article id="art3"><ul> <li><img src="imagenes/c3.png" width="220" height="300" alt="Img 03" ></li> </ul></article>
                        <article id="art4"><ul> <li><img src="imagenes/c4.png" width="220" height="300" alt="Img 04" ></li></ul> </article>
                    </section>
               
                </section>
                
            
            <section id="login">
               <!-- <button style="width: 100%" onclick="abrir()">Inicio sesion</button -->
                
                <li>
					<?php
						session_start();
						if(!isset($_SESSION['inicio'])){
					?>
					<a class="nuevo" onclick="abrir()" > <img src="imagenes/Up-Arrow-Icon.png" width="40" height="40" alt="Img 05" ></a>
                    <a class="nuevo" href="nuevo.html"><img src="imagenes/Add-User-512.png" width="40" height="40" alt="Img 06" ></a>
					<?php
							if(isset($_POST['regreso_error'])){
								$err = $_POST['regreso_error'];
								switch($err){
									case 1:
					?>
										<script>
											var cub = document.getElementById("cubierta");
											cub.style.display = "block";
										</script>
										<div id="ini_error">
											<p>
												<h1>ERROR: Usuario o contraseña incorrecta</h1>
											</p>
											<button type="button" onclick="cerrar_error()">Cancelar</button>
										</div>
					<?php
									break;
									case 2:
					?>
										<script>
											var cub = document.getElementById("cubierta");
											cub.style.display = "block";
										</script>
										<div id="ini_err">
											<p>
												<h1>ERROR: llene bien todos los campos</h1>
											</p>
											<button type="button" onclick="cerrar_error()">Cancelar</button>
										</div>
					<?php
									break;
								}
							}
						}else{
							/*Falta codigo que me pasara isra*/
							$usuario = $_SESSION['inicio'];
							echo $usuario;
						}
					?>
                </li>
                
              
            </section>
            
            
              
            
            <footer id="terminos">
                
                <font color="#f0f0f6" size="2" face="Myriad Pro,Bold MS Sans Serif">terminos y usos de condiciones politica y privacidad © 2014 diseñado por minigames  <address>www.minigames.com </address> </font>
               
            </footer>
            
            
            
            <div id="cubierta"></div>
             <div id="log">
				<form method="post" action="php/funciones.php">
					<p>
						Nick:<input name="nick" type="text"><br/>
						Contraseña: <input name="contra" type="password">
					</p>
					<button type="submit" name="opc" value="1">Iniciar</button>
					<button type="button" onclick="cerrar()">Cancelar</button>
				</form>
            </div>
   
        </div> 
    </body>
</html>
