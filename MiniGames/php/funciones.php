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
					$res = mysqli_query($conexion, "select * from usuarios where nick='$nick' and contrase�a=password('$pass');");
					if($lector = mysqli_fetch_array($res)){
						$_SESSION['inicio'] = $nick;
						header("Location: ../index.php");
					}else{
						/*Usuario o contrase�a incorecto */
						echo("<form method='post' action='../index.php'><button type='submit' id='bot' name='regreso_error' value='1'>Iniciar</button></form>");
						echo("<script>var b = document.getElementById('bot');b.click();</script>");
						/*header("Location: ../index.php");*/
					}
					mysqli_free_result($res);
					mysqli_close($conexion);
				}else{
					/*Falta contrase�a o nick*/
					echo("<output name='regreso_error' value=�2�></output>");
					/*header("Location: ../index.php");*/
				}
			break;
		}
	}else{
		echo("No hay nada");
	}
?>