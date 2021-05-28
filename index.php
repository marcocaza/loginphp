<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<meta charset="utf-8">
</head>


<body>
<h1>lo mejor de lo mejor</h1>
<?php
	require "conexion.php";  
	session_start();
	if (isset($_POST['ingresar'])) {
		$usu1 = $_POST['usuario'];
		$clave1 = $_POST['clave'];
		$res = $mysqli->query("select * from usuarios where usuario = '$usu1' and clave = '$clave1';");
		if (!empty($res->fetch_assoc())){
			setcookie("usuarioc",$usu1,time()+120,"/");
			setcookie("pas",$clave1,time()+120,"/");
			$_SESSION['acceso'] = "true";
			header("Location: session.php");
		}else{
		echo "<script>alert('datos incorrectos')</script>";
		}
	}
	if(!empty($_COOKIE["usuarioc"]) && !isset($_SESSION['acceso'])){
			header("Location: index.php");
		}else{  
		echo "<form acction='' method='post' class='login'>
			<h1>Ingrese los datos de ususartio para iniciar sesion</h1>
			<h2>Usuario</h2><input type='text' name= 'usuario'>
			<br>
			<h2>Clave</h2><input type='text' name= 'clave'>
			<br>
			<br>
			<input type='submit' value='Ingresar' name='ingresar'>
			</form>
		";	
	}
?>
</body>
</html>
