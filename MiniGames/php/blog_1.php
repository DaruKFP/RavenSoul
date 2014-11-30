<?php
                

                        if(session_start()){
                    $user = $_SESSION['inicio'];
                    //echo "$user";    
                    if(isset($_POST['btn'])){
                        $btn= $_POST['btn'];
                        $comentario_nuevo= $_POST['comentar'];
                        $conexion = mysqli_connect("localhost", "root", "", "minigames");
                        $num_com=0;
                        $res = mysqli_query($conexion, "select num_com from comentarios order by num_com desc limit 1");
                        if($lector = mysqli_fetch_array($res)){
                            $num_com=$lector['num_com'];
                            
                        }
                        $num_com=$num_com+=1;
                        mysqli_free_result($res);

                          $res = mysqli_query($conexion, "insert into comentarios values('0','1', '$user', '$comentario_nuevo', '$num_com', '$btn')");  
                        mysqli_close($conexion);
                        header("Location: ../blog.php");
                    }
                }else{

                    header("Location: ../blog.php");
                    
                }
?>