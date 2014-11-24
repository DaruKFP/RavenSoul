<html>
    <head>
        <title>Blog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilocontac.css">
    </head>
    <?php include "php/blog_1.php"
    
    ?>
    <script language="javascript" type="text/javascript">
        function MostrarOcultar( ref ) 
{  
  // Nodo del documento que se [muestra /oculta]
	// Tiene que tener un ID unico
  var nodoContraible  = document.getElementById(ref); 
	
	// Nodo que contiene el [enlace] que maneja el que se [muestra /oculta]
	// DEBE tener el mismo ID que el nodo [nodoContraible] pero precedido por una x
  var xNodoDelEnlace = document.getElementById("x" + ref); 
  
  if (nodoContraible.style.display =='none') 
  { 
     xNodoDelEnlace.innerHTML = '- Contraer'; 
	   nodoContraible.style.display ='block'; 
  } 
  else 
  { 
    xNodoDelEnlace.innerHTML = '+ Comentar '; 
    nodoContraible.style.display ='none'; 
  } 
} 
    </script>
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
                <section class="nada">
                		<section onload(<?php cargar();?>)></section>
                </section>
                
         </body>
</html>