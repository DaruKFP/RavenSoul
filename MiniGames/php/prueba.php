<?php
function coment(){
            if(session_start()){
                $user = $_SESSION['inicio'];                   
                $comentario= $_POST['comentar'];
                $conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
                mysqli_query($conexion, "insert into comentario_juego values('0','1','$user','$comentario')");  
                mysqli_close($conexion);
            }else{
                    
            }
        }
        
        if(mb_strlen($_POST['comentar'])==0){
            echo"<script>Inicia sesion para comentar.</script>";
        }else{
            coment();
        }
        
?>