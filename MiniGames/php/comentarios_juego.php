 <?php

    echo"<h3>Queremos saber tu opinion</h3>";
    echo "<h3>Puntua</h3>";
    
    //mysqli_free_result($res);
//    mysqli_close($conexion);

    function comentarios(){
$conexion = mysqli_connect("localhost", "root", "", "minigames");
$res = mysqli_query($conexion, "select * from comentario_juego where id_juego=1;");
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
function crea_com(){
echo"<form method='POST'>";
    echo"<img class='manitas' src='../botones/like.png' hspace='0'>";
    echo"<img class='manitas' src='../botones/no like.png'>";
    
    echo"<h3>Comenta  <input type='text' id='tema' name='tema' placeholder='Tema' cols='40' rows='5' style='width:40%;height:20%;font-size:12px;font-family:Comic Sans MS;color: #484c4c;'>";
    echo"<button id='comenta' type='submit' onclick='refresh()'>comenta</button>";
    
    echo"</h3>";
echo"</form>";
    }
    if(function_exists('coment')){

    }else{
        function coment(){
            //if(session_start()){
                    //$user = $_SESSION['inicio'];
            $user = 'remy';
                    //if(isset($_POST['tema'])){
                        $comentario= $_POST['tema'];
                        $conexion = mysqli_connect("localhost", "root", "", "minigames");
                        $res = mysqli_query($conexion, "insert into comentario_juego values('0','1','$user','$comentario');");  
                        mysqli_close($conexion);
                        //header("Location: ../juego.php");
                        comentarios();
                    
                //}else{

                    //header("Location: ../blog.php");
                    
                }
        }
    if(isset($_POST['tema'])){
        coment();
    }
//echo"<form>";
   
    
    
            //}
    //}
    
?>