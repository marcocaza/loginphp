<!DOCTYPE html>
<html>
<head>
	<title>SESSION</title>
</head>
<body>
<?php 
session_start();
if (isset($_SESSION["acceso"])) {
    if ($_SESSION["acceso"] == "true") {
        echo "
        <h2>BIENBENIDO</h2>
<form method='POST' action='session.php'>
    <input type='submit' name='salir' value='Salir' >
</form>";
    }else{
        session_destroy();
        header("Location: index.php");
    }
}
if (isset($_POST["salir"])) {
    session_destroy();
         if( isset($_COOKIE['usuarioc']) ){
         setcookie("usuarioc","",time()-1,"/");
            setcookie("pas","",time()-1,"/");   
    }
    else
    {
        echo "No existe la Cookie";
    }
        header("Location: index.php");
    }

?>
</body>
</html>