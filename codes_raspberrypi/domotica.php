<!DOCTYPE html>

<html>

<head>

	<title>CONTROL WEB </title>
	<!--<meta http-equiv="refresh" content="1" >-->

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
	
	<form action="domotica.php" method="get">

	<table border="2" width = "900" bgcolor ="#CFB2AC">
	<tr> <!--1° FILA-->
		<td>
		<center>
			<font size="5" color="blue" face="BankGothic" > <b>PUERTA : </b> </font>
			<button type="submit" name="puerta_abrir" >
			<font size="4" color="red">ABRIR</font>
				<img src = "https://cdn3.iconfinder.com/data/icons/simple-toolbar/512/door_open_exit_out_logout_house_closed_quit-128.png" alt="Smiley face" height="42" width="42">
			</button>
			
			<button type="submit" name="puerta_cerrar" >
			<font size="4" color="black">CERRAR</font>
				<img src = "https://image.freepik.com/free-icon/closed-filled-rectangular-door_318-75559.png" alt="Smiley face" height="42" width="42">
			</button>
		</center>
		</td> <!-- 1° COLUMNAS-->
		
		<td>
		<center>
			<font size="5" color="blue" face="BankGothic" > <b>LUCES : </b> </font>
			<button type="submit" name="luces_on">
			<font size="4" color="red">ON</font>
				<img src = "http://horno3.ensi.com.mx/apps/site/files/foco.jpg" alt="Smiley face" height="42" width="42">
			</button>
			<button type="submit" name="luces_off">
			<font size="4" color="black">OFF</font>
				<img src = "http://www.ccp.com.py/img/pd_foco_apagado_grande.png" alt="Smiley face" height="42" width="42">
			</button><br/>
		</center>
		</td> <!--2° COLUMNAS-->
	
	</tr>
	
	<tr> <!--2° FILAS-->

		<td>
		<center>
		<font size="5" color="blue" face="BankGothic" > <b>	VENTANA : </b> </font>
			<button type="submit" name="ventana_abrir" >
			<font size="4" color="red">ABRIR</font>
				<img src = "http://www.pctechnical.com.ar/Varios/Wallpapers/Paisajes/001/004_1024x768.jpg" alt="Smiley face" height="42" width="42">
			</button>
			<button type="submit" name="ventana_cerrar">
			<font size="4" color="black">CERRAR</font>
				<img src = "http://i01.i.aliimg.com/photo/v0/60048079515/Veranda_crank_open_aluminium_house_sliding_window.jpg" alt="Smiley face" height="42" width="42">
			</button><br/>
		</center>
		</td> <!--1° COLUMNAS-->
		
		<td>
			<center>
			<font size="5" color="blue" face="BankGothic" > <b>	CALEFACCION : </b> </font>
			<button type="submit" name="calefaccion_on">
			<font size="4" color="red">ON</font>
				<img src = "http://viveroempresasvicalvaro.es/blog/wp-content/uploads/2011/10/DIBUJO-CALEFACCION-80x80.jpg" alt="Smiley face" height="42" width="42">
			</button>
			<button type="submit" name="calefaccion_off">
			<font size="4" color="Black">OFF</font>
				<img src = "http://www.bosch.com.co/content/language1/img_boschLive/Radiador.jpg" alt="Smiley face" height="42" width="42">
			</button><br/>
			</center>
		</td> <!--2°COLUMNAS-->
	
	</tr>
	
	<tr> <!--3°FILAS-->

		<td>
			<center>
			<font size="5" color="blue" face="BankGothic" > <b>	PERSIANA : </b> </font>
			<button type="submit" name="persiana_subir">
			<font size="4" color="red">SUBIR</font>
				<img src = "http://zutrok.com/288-zoom_liquid/ventana-corredera-de-2-hojas-con-persiana-sin-rpt-it205.jpg" alt="Smiley face" height="42" width="42">
			</button>
			<button type="submit" name="persiana_bajar">
			<font size="4" color="Black">BAJAR</font>
				<img src = "http://www.pitarquevidriers.com/images/phocagallery/fotografias/contenidoweb/persianas/persiana-ventana.jpg" alt="Smiley face" height="42" width="42">
			</button><br/>
			</center>
		</td> <!--1°COLUMNAS-->
		
		<td>
			<center>
			<font size="5" color="blue" face="BankGothic" > <b>	ALARMA : </b> </font>
			<button type="submit" name="alarma_activar">
			<font size="4" color="red">ACTIVAR</font>
				<img src = "http://rodych.es/wp-content/uploads/2015/09/alarma.jpg" alt="Smiley face" height="42" width="42">
			</button><br/>
			</center>
		</td> <!--2° COLUMNAS-->
	
	</tr>
	
	</table>
	
	</form>
	
	</center>
	
	<center>
	<?php
	if($_GET){	
		
    if(isset($_GET['puerta_abrir'])){
        puerta_abrir();
    }
	elseif(isset($_GET['puerta_cerrar'])){
        puerta_cerrar();
    }
	elseif(isset($_GET['luces_on'])){
        luces_on();
    }
	elseif(isset($_GET['luces_off'])){
        luces_off();
    }
	elseif(isset($_GET['ventana_abrir'])){
        ventana_abrir();
    }
	elseif(isset($_GET['ventana_cerrar'])){
        ventana_cerrar();
    }
	elseif(isset($_GET['calefaccion_on'])){
        calefaccion_on();
    }
	elseif(isset($_GET['calefaccion_off'])){
        calefaccion_off();
    }
	elseif(isset($_GET['persiana_subir'])){
        persiana_subir();
    }
	elseif(isset($_GET['persiana_bajar'])){
        persiana_bajar();
    }
	elseif(isset($_GET['alarma_activar'])){
        alarma_activar();
    }
	}
 
    function puerta_abrir()
    {
       echo "PUERTA ABIERTA";
    }
    function puerta_cerrar()
    {
       echo "PUERTA CERRADA.";
    }
	function luces_on()
    {
       echo "LUCES ON.";
    }
	function luces_off()
    {
       echo "LUCES OFF.";
    }
	function ventana_abrir()
    {
       echo "VENTANA ABIERTA.";
    }
	function ventana_cerrar()
    {
       echo "VENTANA CERRADA.";
    }
	function calefaccion_on()
    {
       echo "CALEFACCION ON.";
    }
	function calefaccion_off()
    {
       echo "CALEFACCION OFF.";
    }
	function persiana_subir()
    {
       echo "PERSIANA SUBIDA.";
    }
	function persiana_bajar()
    {
       echo "PERSIANA BAJADA.";
    }
	function alarma_activar()
    {
       echo "ALARMA!.";
	   echo '<script language="javascript">';
	   echo 'alert("ALARMA ACTIVADA")';
	   echo '</script>';
    }
 
	?>
	</center>
</body>



</html>