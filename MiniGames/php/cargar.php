<?php
function cargar($id){
$conexion = mysqli_connect("localhost", "root", "", "minigames");
$res = mysqli_query($conexion, "select * from comentario_juego where id_juego=$id");
$comen_juego = array();
while($lector = mysqli_fetch_array($res)){
        array_push($comen_juego, $lector["folio"]);
        array_push($comen_juego, $lector["id_juego"]);
        array_push($comen_juego, $lector["nick"]);
        array_push($comen_juego, $lector["comentario"]);
}
mysqli_free_result($res);
mysqli_close($conexion);

for ($i=3; $i <=count($comen_juego) ; $i+=4) { 
    echo "<div id='post'>";
        echo "<section class='comentarios'>";
            echo "<aside id='comentariopersona'>";
                $comentario=$comen_juego[$i];
                echo "$comentario";
            echo "</aside>";
            echo "<aside id='persona'>";
                echo "<img src='usuarios/user1.gif' class='imag'>";
                echo "<aside id='userpersona'>";
                    $persona= $comen_juego[$i-1];
                    echo "$persona";
                echo "</aside>";
            echo "</aside>";
        echo "</section>";
    echo "</div>";
}
}
?>