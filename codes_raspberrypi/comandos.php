<?php

    if(isset($_GET['boton'])) {
      switch ( $_GET['boton']) {
        case "puerta_abrir" :
		  //puerta_abrir();
		  $ch = curl_init("http://www.google.com/");
			curl_exec($ch);
          break;
		  
        case "puerta_cerrar" :
          puerta_cerrar();
          break;
		  
        case "luces_on" :
          luces_on();
         break;
		 
        case "luces_off" :
          luces_off();
         break;

        case "ventana_abrir" :
          ventana_abrir();
         break;
		 
		case "ventana_cerrar" :
          ventana_cerrar();
         break;
		 
		case "calefaccion_on" :
          calefaccion_on();
         break;
		 
		case "calefaccion_off" :
          calefaccion_off();
         break;
		 
		case "persiana_subir" :
          persiana_subir();
         break;
		 
		case "persiana_bajar" :
          persiana_bajar();
         break;
		
		case "alarma" :
          alarma();
         break;

		}
	}		
 
    function puerta_abrir()
    {
       echo "PUERTA ABIERTA.";
	   system("sudo python puerta_abrir.py");
	   
    }
    function puerta_cerrar()
    {
       echo "PUERTA CERRADA.";
	   system("sudo python puerta_cerrar.py");
    }
	function luces_on()
    {
       echo "LUCES ON.";
	   system("sudo python luces_on.py");
    }
	function luces_off()
    {
       echo "LUCES OFF.";
	   system("sudo python luces_off.py");
    }
	function ventana_abrir()
    {
       echo "VENTANA ABIERTA.";
	   system("sudo python ventana_abrir.py");
    }
	function ventana_cerrar()
    {
       echo "VENTANA CERRADA.";
	   system("sudo python ventana_cerrar.py");
    }
	function calefaccion_on()
    {
       echo "CALEFACCION ON.";
	   system("sudo python calefaccion_on.py");

    }
	function calefaccion_off()
    {
       echo "CALEFACCION OFF.";
	   system("sudo python calefaccion_off.py");
    }
	function persiana_subir()
    {
       echo "PERSIANA SUBIDA.";
	   system("sudo python persiana_subir.py");
    }
	function persiana_bajar()
    {
       echo "PERSIANA BAJADA.";
	   system("sudo python persiana_bajar.py");
    }
	function alarma()
    {
       echo "ALARMA!.";
	   echo '<script language="javascript">';
	   echo 'alert("ALARMA ACTIVADA")';
	   echo '</script>';
	   
	   system("sudo python alarma.py");
    }
 
	?>