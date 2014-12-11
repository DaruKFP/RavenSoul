<html>
    <head>
        <title>Blog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilocontac.css">
        
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="css/menu.css">
        <script src="funciones.js"></script>
        <link rel="icon" type="image/x-icon" href="imagenes/logoicon.ico"/>
    </head>
    <body>
            <section class="bar">
                <a href="index.php">
                    <article class="art1"><img src="css/minigames2.png" width="290" height="95" alt="Img01" ></article>
                </a>
            <section class="bar1">
                <?php
                    include "barramenu.php";
                ?>
            </section>
          </sextion>
                <section class="nada">
                		<!--<section onload(<?php cargar();?>)></section>-->
                         <?php
                         function cargar(){
                    $conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");

                    $res = mysqli_query($conexion, "select * from comentarios order by num_com");
                    $comento= array();
                  while($lector =mysqli_fetch_array($res)){
                        
                        array_push($comento, $lector["id_comentario"]);
                        array_push($comento, $lector["id_juego"]);
                        array_push($comento, $lector["nick"]);
                        array_push($comento, $lector["comentario"]);
                        array_push($comento, $lector["num_com"]);
                        array_push($comento, $lector["com_ant"]);
                  }
                  mysqli_free_result($res);
                  $num_com = array();
               if(count($comento)>0){
                  $res1 = mysqli_query($conexion, "select * from comentarios");
                  while($lector1 = mysqli_fetch_array($res1)) {
                        array_push($num_com, $lector1["num_com"]);
                  }
                  mysqli_free_result($res1);
                  mysqli_close($conexion);
                  $con=count($num_com);                  
                  $ant=0;
                  $btn=0;
                  
            for ($i=1; $i<=$con; $i++) { 
                $en=0;
                    for ($v=5;$v <=count($comento); $v+=6) { 
                        if($comento[$v-1]==$i && $comento[$v]==0){
                            $en=1;
                            $ant=$comento[$v-1];
                            echo "<div id='post'>";
                                echo "<section class='comentarios'>";
                                        echo "<aside id='comentariopersona'>";
                                            $comentario=$comento[$v-2];
                                            echo "$comentario";
                                        echo "</aside>";
                                        echo "<aside id='persona'>";
                                              echo "<img src='usuarios/user1.gif' class='imag'>";
                                              echo "<aside id='userpersona'>";
                                              $persona= $comento[$v-3];
                                                    echo "$persona";
                                              echo "</aside>";
                                        echo "</aside>";
                                echo "</section>";
                        }else{
                            if($comento[$v]==$i){
                                echo "<div id='post1'>";
                                        echo "<section class='comentarios'>";
                                            echo "<aside id='comentariopersona'>";
                                                $comentario=$comento[$v-2];
                                                  echo "$comentario";
                                            echo "</aside>";
                                            echo "<aside id='persona'>";
                                                    echo "<img src='usuarios/user1.gif' class='imag'>";
                                                    echo "<aside id='userpersona'>";
                                                        $persona= $comento[$v-3];
                                                        echo "$persona";
                                                    echo "</aside>";
                                            echo "</aside>";
                                        echo "</section>";      
                                        echo "</div>";
                            }
                        }

                    }
                        if($en!=0){
                                    $btn+=1;
                                    echo"<form id='comentar1' method='post' action='php/blog_1.php'>";
                                        //<font face="Comic Sans MS" size="3">
                                    echo "<textarea id='comentar' name='comentar' cols='90' rows='5' style='font-size:12px;font-family:Comic Sans MS;background-image:url(images/1.jpg);color:#484c4c'>";
                                        echo "</textarea>";
                                        echo"<button class='btncomentar' type='submit' value='$btn' name='btn' id='btn' ></button>";
                                        
                                    echo"</form>";
                        echo "</div>";
                    }
                  }
                  }
                  //termina comento
                    echo"<form id='comentar1' method='POST' action='php/blog_1.php'>";
                                        //<font face="Comic Sans MS" size="3">
                                    echo "<textarea id='comentar' required='Escribe algo' name='comentar' cols='90' rows='5' style='font-size:12px;font-family:Comic Sans MS;background-image:url(images/1.jpg);color:#484c4c'>";
                                        echo "</textarea>";
                                        echo"<button class='btncomentar' type='submit' value='0' name='btn' id='btn'></button>"; 
                                    echo"</form>";
                        echo "</div>";
               }
                  cargar();
                  ?>
                </section>
            
         </body>
</html>