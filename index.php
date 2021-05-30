
<?php
$confirmar=0;
if (isset($_POST['ingresar'])) {
    $usu1 = $_POST['usuario'];
	$clave1 = $_POST['clave'];
    settype($clave1, 'int'); 
$filas=file('archivos/usuarios.txt'); 
    foreach($filas as $value){
        list($usu, $cla) = explode(",", $value);
        if ($usu == $usu1 and $cla == $clave1) {
            echo "datos ingresados correctamente";
            $confirmar=1;
        }
        echo "<br>";
    }
    if ($confirmar==1) {
        header("Location: index2.html");
    }else{
        header("Location: index.html");
    }
}

?>