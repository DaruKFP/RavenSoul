<?php
echo"<form method='POST'>";
    echo"<img class='manitas' src='../../minigames/botones/like.png' hspace='0'>";
    echo"<img class='manitas' src='../../minigames/botones/no like.png'>";
    
    echo"<h3>Comenta  <input type='text' id='tema' name='tema' placeholder='Tema' cols='40' rows='5' style='width:40%;height:20%;font-size:12px;font-family:Comic Sans MS;color: #484c4c;'>";
    echo"<button type='submit' id='comenta' name='comenta'>Comentar</button>";
    
    echo"</h3>";
echo"</form>";
        function coment(){
            if(session_start()){
                $user = $_SESSION['inicio'];                   
                //$user='remy';
                $comentario= $_POST['tema'];
                $conexion = mysqli_connect("localhost", "root", "", "minigames");
                mysqli_query($conexion, "insert into comentario_juego values('0','1','$user','$comentario')");  
                mysqli_close($conexion);
                      
            }else{
                    
            }
        }
        
        if(isset($_POST['tema'])){
            coment();
        }
?>