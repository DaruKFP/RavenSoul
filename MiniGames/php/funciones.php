<?php
	$opcion = 0;
	if(isset($_POST['opc'])){
		$opcion = $_POST['opc'];
		switch($opcion){
			case 0:
				echo("Hay algun error asi que busca");
				/*header("Location: index.php");*/
			break;
			case 1:
				if(isset($_POST['nick']) && isset($_POST['contra'])){
					session_start();
					$nick = $_POST['nick'];
					$pass = $_POST['contra'];
					$conexion = mysqli_connect("localhost", "root", "", "minigames");
					$res = mysqli_query($conexion, "select * from usuarios where nick='$nick' and contraseña=password('$pass');");
					if($lector = mysqli_fetch_array($res)){
						$_SESSION['inicio'] = $nick;
						header("Location: ../index.php");
					}else{
						/*Usuario o contraseña incorecto */
						echo("<form method='post' action='../index.php'><button type='submit' id='bot' name='regreso_error' value='1'>Iniciar</button></form>");
						echo("<script>var b = document.getElementById('bot');b.click();</script>");
						/*header("Location: ../index.php");*/
					}
					mysqli_free_result($res);
					mysqli_close($conexion);
				}else{
					/*Falta contraseña o nick*/
					echo("<output name='regreso_error' value=´2´></output>");
					/*header("Location: ../index.php");*/
				}
			break;
			case 2:
			
			/*echo($_POST['nick']+"<br>");
			echo($_POST['nombre']+"<br>");
			echo($_POST['contra']+"<br>");
			echo($_POST['email']+"<br>");
			echo($_POST['fecha_nacimiento']+"<br>");
			echo($_POST['descripcion']+"<br>");*/
				if(isset($_POST['nick']) && isset($_POST['nombre']) && isset($_POST['contra']) && isset($_POST['email']) && isset($_POST['fecha_nacimiento']) && isset($_POST['descripcion'])){
					$nick = $_POST['nick'];
					$nombre= $_POST['nombre'];
					$contra= $_POST['contra'];
					$email= $_POST['email'];
					$sexo= $_POST['sexo'];
					$fecha = $_POST['fecha_nacimiento'];
					$descripcion = $_POST['descripcion'];
					
					echo("$nick <br> $nombre <br> $contra <br> $email <br> $sexo <br> $fecha <br> $descripcion <br> ");
					
					$conexion = mysqli_connect("localhost", "root", "", "minigames");
					$res = mysqli_query($conexion, "select * from usuarios where nick='$nick';");
					if($lector = mysqli_fetch_array($res)){
					/* mandar decir que el nick ya existe */
					echo("<br><br>///////////////////////////////////////////////////////////////////////////////////////////////////////<br>Este ya existe xD <br>");
					for($i=0;$i<9;$i++){
						echo("$lector[$i] <br>");
					}
					echo("-----------------------------------------------------------------------------------------------------------------ya existe :/ <br>");
					}else{
					echo("------------------------------------------------------------------------------------------------------------------va a guardar :/");
					$res = mysqli_query($conexion, "insert into usuarios values('$nick','reg','$nombre',password('$contra'),'$sexo','$email','$fecha','$descripcion');");
					echo("<br>---------------------------------------------------------------------------------------------------------------<br>$res");
					if(1 == $res){
					echo("<script> alert('Guardado correctamente');</script>");
					session_start();
					$_SESSION['inicio'] = $nick;
					header("Location: ../index.php");
					}else{
					echo("<script> alert('Guardado incorrectamente');</script>");
					
					}
					}
					
				}
			break;
			
			case 3:
			$nombre= $_POST['nombre'];
			$email= $_POST['email'];
			$tema= $_POST['tema'];
			$mensaje= $_POST['comentario'];
			
			if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['tema']) && isset($_POST['comentario'])){
			//mail("reavensoul@gmail.com",$tema,$mensaje,"De: ".$nombre,"email del destinatario".$email);
			echo("<script> alert('Mensaje Enviado correctamente');</script>");
			echo("<form method='post' action='../contacto.php'><button type='submit' id='bot' name='regreso_error' value='1'>Iniciar</button></form>");
			echo("<script>var b = document.getElementById('bot');b.click();</script>");
			}else{
			echo("<script> alert('llene todos los campos antes de enviar');</script>");
			}
			break;
			default:
			echo($opcion);
			break;
		}
	}else{
		echo("No hay nada");
	}
?>