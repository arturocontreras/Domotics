<html>

<head>

	<title>CONTROL WEB </title>
	<!--<meta http-equiv="refresh" content="1" >-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
         $('#form_control input').click(function(){
           var valor = $(this).val();

           $.get( "comandos.php", { boton: valor } );
         });
        });
    </script>

</head>

<body bgcolor ="#E9F7CD">
<!--//bgcolor = "#dd0000"-->
	<center> <u> <b> <font size="7" color="Black" face="BankGothic" > CONTROL WEB SISTEMA DOMOTICO </font></b> </u> </center>
	
	<center>	
		<img src = "http://192.168.0.16/mjpeg.cgi" height="350" width="600"> <!--Aca colocar la direcccion donde se publica las imagenes de la camara IP-->
		<!--<meta http-equiv="refresh" content="2">-->
	</center>

	<center> <u> <b> <font size="4" color="Black" face="BankGothic" > COMANDOS </font></b> </u> </center>

	
	<center>	
	
	<form action="comandos.php" method="get" id="form_control">

	<table border="2" width = "900" bgcolor ="#CFB2AC">
	<tr> <!--1° FILA-->
		<td>
		<center>
			<font size="5" color="blue" face="BankGothic" > <b>PUERTA : </b> </font>
			<input type="button" style="height:50px; width:100px; background-color:yellow" name="puerta_abrir" value="puerta_abrir">
		
			<input type="button" style="height:50px; width:100px; background-color:green" name="puerta_cerrar" value="puerta_cerrar">

		</center>
		</td> <!-- 1° COLUMNAS-->
		
		<td>
		<center>
			<font size="5" color="blue" face="BankGothic" > <b>LUCES : </b> </font>
			<input type="button" style="height:50px; width:100px; background-color:yellow" name="luces_on" value="luces_on">

			<input type="button" style="height:50px; width:100px; background-color:green" name="luces_off" value="luces_off">
			<br/>
		</center>
		</td> <!--2° COLUMNAS-->
	
	</tr>
	
	<tr> <!--2° FILAS-->

		<td>
		<center>
		<font size="5" color="blue" face="BankGothic" > <b>	VENTANA : </b> </font>
			<input type="button" style="height:50px; width:100px; background-color:yellow" name="ventana_abrir" value="ventana_abrir">

			<input type="button" style="height:50px; width:100px; background-color:green" name="ventana_cerrar" value="ventana_cerrar">
			<br/>
		</center>
		</td> <!--1° COLUMNAS-->
		
		<td>
			<center>
			<font size="5" color="blue" face="BankGothic" > <b>	CALEFACCION : </b> </font>
			<input type="button" style="height:50px; width:100px; background-color:yellow" name="calefaccion_on" value="calefaccion_on">

			<input type="button" style="height:50px; width:100px; background-color:green" name="calefaccion_off" value="calefaccion_off">
			<br/>
			</center>
		</td> <!--2°COLUMNAS-->
	
	</tr>
	
	<tr> <!--3°FILAS-->

		<td>
			<center>
			<font size="5" color="blue" face="BankGothic" > <b>	PERSIANA : </b> </font>
			<input type="button" style="height:50px; width:100px; background-color:yellow" name="persiana_subir" value="persiana_subir">

			<input type="button" style="height:50px; width:100px; background-color:green" name="persiana_bajar" value="persiana_bajar">
			<br/>
			</center>
		</td> <!--1°COLUMNAS-->
		
		<td>
			<center>
			<font size="5" color="blue" face="BankGothic" > <b>	ALARMA : </b> </font>
			<input type="button" style="height:50px; width:100px; background-color:red" name="alarma" value="alarma">
			</center>
		</td> <!--2° COLUMNAS-->
	
	</tr>
	
	</table>
	
	</form>
	
	</center>

</body>



</html>