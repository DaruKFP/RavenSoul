<?php
	$opcion = 0;
	if(isset($_POST['opc'])){
		$opcion = $_POST['opc'];
		switch($opcion){
			case 0:
				echo("Hay algun error asi que busca");
				header("Location: ../index.php");
			break;
			case 1:
				//Iniciar  sesion
				if(isset($_POST['nick']) && isset($_POST['contra'])){
					//session_start();
					$nick = $_POST['nick'];
					$pass = $_POST['contra'];
					$conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
					$res = mysqli_query($conexion, "select * from usuarios where nick='$nick' and contraseña=password('$pass');");
					if($lector = mysqli_fetch_array($res)){
						session_start();
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
					//echo("<output name='regreso_error' value=´2´></output>");
					/*header("Location: ../index.php");*/
				}
			break;
			case 2:
				//Agregar
				if(isset($_POST['nick']) && isset($_POST['nombre']) && isset($_POST['contra']) && isset($_POST['email']) && isset($_POST['fecha_nacimiento']) && isset($_POST['descripcion'])){
					$nick = $_POST['nick'];
					$nombre= $_POST['nombre'];
					$contra= $_POST['contra'];
					$email= $_POST['email'];
					$sexo= $_POST['sexo'];
					$fecha = $_POST['fecha_nacimiento'];
					$descripcion = $_POST['descripcion'];
					if((strlen($nick))>2 && (strlen($nombre))>2 && (strlen($contra))>2 && (strlen($email))>2 && (strlen($sexo))>0 && (strlen($descripcion))>2){
					$conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
					$res = mysqli_query($conexion, "select * from usuarios where nick='$nick';");
					if($lector = mysqli_fetch_array($res)){
					/* mandar decir que el nick ya existe */
						echo("<form method='post' action='../nuevo.php'><button type='submit' id='bot' name='regreso_error' value='3'>Iniciar</button></form>");
						echo("<script>var b = document.getElementById('bot');b.click();</script>");
					}else{
					echo("------------------------------------------------------------------------------------------------------------------va a guardar :/");
					$res = mysqli_query($conexion, "insert into usuarios values('$nick','reg','$nombre',password('$contra'),'$sexo','$email','$fecha','$descripcion');");
					echo("<br>---------------------------------------------------------------------------------------------------------------<br>$res");
					if(1 == $res){
						session_start();
						$_SESSION['inicio'] = $nick;
						header("Location: ../index.php");
					}else{
						echo("<form method='post' action='../nuevo.php'><button type='submit' id='bot' name='regreso_error' value='4'>Iniciar</button></form>");
						echo("<script>var b = document.getElementById('bot');b.click();</script>");
					}
					}
					}else{
						echo("<form method='post' action='../nuevo.php'><button type='submit' id='bot' name='regreso_error' value='5'>Iniciar</button></form>");
						echo("<script>var b = document.getElementById('bot');b.click();</script>");
					}
				}
			break;
			
			case 3:
			//Contacto
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
				echo("<form method='post' action='../contacto.php'><button type='submit' id='bot' name='regreso_error' value='5'>Iniciar</button></form>");
				echo("<script>var b = document.getElementById('bot');b.click();</script>");
			}
			break;
			case 4:
				if(isset($_POST['pruebaID']) && isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['descripcion']) && isset($_POST['puntuacion']) && isset($_POST['instrucciones']) && isset($_POST['dirj']) && isset($_POST['diri'])){
					$id = $_POST['pruebaID'];
					$nom=$_POST['nombre'];
					$tip=$_POST['tipo'];
					$desc=$_POST['descripcion'];
					$punt=$_POST['puntuacion'];
					$inst=$_POST['instrucciones'];
					$direcj=$_POST['dirj'];
					$direci=$_POST['diri'];
					$conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
					$res = mysqli_query($conexion, "select * from juegos where id_juego='$id';");
					if($lector = mysqli_fetch_array($res)){
					//echo($lector);
					/* mandar decir que el nick ya existe */
					echo("<br><br>///////////////////////////////////////////////////////////////////////////////////////////////////////<br>Este ya existe xD <br>");
					for($i=0;$i<9;$i++){
						echo("$lector[$i] <br>");
					}
					echo("-----------------------------------------------------------------------------------------------------------------ya existe :/ <br>");
					$res = mysqli_query($conexion, "update juegos set nombre='$nom' where id_juego=$id;");
					$res = mysqli_query($conexion, "update juegos set tipo='$tip' where id_juego=$id;");
					$res = mysqli_query($conexion, "update juegos set descripcion='$desc' where id_juego=$id;");
					$res = mysqli_query($conexion, "update juegos set puntuacion='$punt' where id_juego=$id;");
					$res = mysqli_query($conexion, "update juegos set instrucciones='$inst' where id_juego=$id;");
					$res = mysqli_query($conexion, "update juegos set dir_juego='$direcj' where id_juego=$id;");
					$res = mysqli_query($conexion, "update juegos set dir_imagen='$direci' where id_juego=$id;");
					if(1 == $res){
						echo("<script> alert('cambiado correctamente');</script>");
						header("Location: ../ModJuegos.php");
					}else{
					echo"$res";
					echo("$id <br> $nom <br> $tip <br> $desc <br> $punt <br> $inst <br> $direcj <br> $direci <br> -$res- <br> ");
					}
				}
				}
			break;
			case 5:
			if(isset($_POST['nick'])){
			$nick = $_POST['nick'];
			$conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
			$res = mysqli_query($conexion, "delete from usuarios where nick='$nick';");
			echo"$res";
			if(1 == $res){
				header("Location: ../ModUsarios.php");
			}
			}
			break;
			case 6:
			$rango = $_POST['Rango'];
			$nick = $_POST['nick'];
			$conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
			$res = mysqli_query($conexion, "update usuarios set tipo_de_usuario ='$rango' where nick='$nick';");
			echo"$res";
			if(1 == $res){
			echo("<script> alert('Se modifico el usuario');</script>");
			header("Location: ../ModUsarios.php");
			}
			break;
			case 7:
		    if(isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['Genero']) && isset($_POST['descripcion']) && isset($_POST['instrucciones']) && isset($_POST['dirp']) && isset($_POST['diri'])){
			$id=$_POST['id'];
			$nom=$_POST['nombre'];
			$genero=$_POST['Genero'];
			$desc=$_POST['descripcion'];
			$inst=$_POST['instrucciones'];
			$porta=$_POST['dirp'];
			$dirj=$_POST['dirj'];
			$diri=$_POST['diri'];
			$conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
		    $res = mysqli_query($conexion, "insert into juegos values($id,'reg','$nom','$genero','$desc',0,'$inst','$dirj','$diri','$porta');");
			//$res = mysqli_query($conexion,"insert into juegos values(5,'reg','ddd','aaaa','dddd',0,'aaaaa','j','dddi','ddddd');");	
			//la condicion aveces devuelve 1 o un booleano y por eso aveces marca error
			if(1== $res){
				header("Location: ../nuevoJuego.php");
			}else{
				echo("<form method='post' action='../index.php'><button type='submit' id='bot' name='regreso_error' value='2'>Iniciar</button></form>");
				echo("<script>var b = document.getElementById('bot');b.click();</script>");
			}
			}

			break;
			case 8:
			session_start();
				session_destroy();
				header("Location: ../index.php");
			break;
		}
	}else{
		header("Location: ../index.php");
	}
?>