<?php

date_default_timezone_set('America/Mexico_City');

$servername = "localhost";
$username = "pormisbi_gotes";
$password = "tw85775rNDhB";

$handle = mysql_connect($servername, $username, $password);
$found = mysql_select_db("pormisbi_gotes", $handle);

$respuestaUno = $_POST["respuestaUno"];
$respuestaDos = $_POST["respuestaDos"];
$respuestaTres = $_POST["respuestaTres"];

$fechaHora = date("Y-m-d H:i:s");

// Checar si las variables tienen contenido


if ($found) {

	//echo "Se conecto satisfactoriamente";

	if(isset($respuestaUno) && isset($respuestaDos) && isset($respuestaTres)){

		//echo "Variables asignadas";

		$sqlquery = "INSERT INTO `pormisbi_gotes`.`EncuestaClub` (`id`, `respuestaUno`, `respuestaDos`, `respuestaTres`, `fechaHora`) VALUES (NULL, '". $respuestaUno ."', '". $respuestaDos ."', '". $respuestaTres ."', '". $fechaHora ."');";
		$resultado = mysql_query($sqlquery);
			if ($resultado)  
			{
				// Se ha ingresado satisfactoriamente el nuevo registro.
				//echo "Se agrego un nuevo registro";
				echo "1";
			}else{
				die("0");
			}

	}else{
		die("0");
	}

}else{
	die("0");
}
?> 