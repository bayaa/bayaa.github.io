<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('db4free.net', 'servidorprueba', '24681313');
	//$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		//$base=mysql_select_db('prueba');
		$base=mysql_select_db('servidorprueba');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	//$nombre=$_POST['nombre'];
	//$correo=$_POST['correo'];
	//$mensaje=$_POST['mensaje'];
	$id_placa=$_POST['id_placa'];
	$feche_reporte=$_POST['feche_reporte'];
	$lugar_de_robo=$_POST['lugar_de_robo'];
	$estado=$_POST['estado'];
	$marca=$_POST['marca'];
	$anio=$_POST['anio'];
	$color=$_POST['color'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$id_placa',
								   '$feche_reporte',
								   '$lugar_de_robo',
								   '$estado',
								   '$marca',
								   '$anio',
								   '$color')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>