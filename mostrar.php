<?php
	//paso 1 es conectarnos con el servidor //esta manera ya esta obsoleta!!
	$link = mysql_connect('localhost', 'root', '');
	if(!$link){
		echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysql_error();
	}else{
	//Paso 2 es seleccionar la base de datos
		$base = mysql_select_db('prueba',$link);
		if(!$base){
			echo'No se encontro la base de datos: '.mysql_error();
		}else{
	//Paso 3 es hacer la sentencia sql y ejecutarla
			$sql = "SELECT * FROM datos";
			$ejecuta_sentencia = mysql_query($sql);
			if(!$ejecuta_sentencia){
				echo'hay un error en la sentencia de sql: '.$sql;
			}else{
	//Paso 4 es traer los resultados como un array para imprirlos en pantalla
				$lista_datos = mysql_fetch_array($ejecuta_sentencia);
			}
		}
	}
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Mostrar Datos</title>
    </div>
	</head>
	<link rel="stylesheet" type="text/css" href="estilo1.css">
	<img src="https://framework-gb.cdn.gob.mx/landing/img/clanding3.png" >
	<body>
		<h1 align="center">BASE DE DATOS</h1>
		<table align="center">
			<tr>
				<th>Id_placa</th>
				<th>fecha reporte</th>
				<th>Lugar de Robo</th>
				<th>Estado</th>
				<th>Marca</th>
				<th>Anio Carro</th>
				<th>Color</th>
				<?php
					
					for($i=0; $i<$lista_datos; $i++){
						echo"<tr>";
							echo"<td>";
								echo$lista_datos['id_placa'];
							echo"</td>";
							
							echo"<td>";
								echo$lista_datos['feche_reporte'];
							echo"</td>";

							echo"<td>";
								echo$lista_datos['lugar_de_robo'];
							echo"</td>";
							echo"<td>";
								echo$lista_datos['estado'];
							echo"</td>";
							echo"<td>";
								echo$lista_datos['marca'];
							echo"</td>";
							echo"<td>";
								echo$lista_datos['anio'];
							echo"</td>";
							echo"<td>";
								echo$lista_datos['color'];
							echo"</td>";
						echo"</tr>";
						
						$lista_datos = mysql_fetch_array($ejecuta_sentencia);	
					}
				?>
			</tr>
		</table>
		<div id="pie">
      <p align="center">Pagina para uso exclusivo de la policia federal.</p>
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Logo_de_la_Polic%C3%ADa_Federal_de_M%C3%A9xico.png">
    </div>
	</body>
</html>
