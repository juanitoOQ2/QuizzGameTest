<?php
	//Declaracion de variables, igual a las variables en unity
	$text1 = $_POST["name"]; 
	$text2 = $_POST["respuesta1"];
	$text3 = $_POST["respuesta2"];

	if($text1 != "")
	{
		//imprime los valores en alguna consola
		echo("Message successfully sent!");
		echo("Field 1" . $text1);
		echo("Field 2" . $text2);
		echo("Field 3" . $text3);
		//abre el archivo para escribir nuestros datos si el archivo no existe lo crea 
		$file = fopen("data.txt","a"); // "a"  de adjuntar o agregar "w" para reemplazar o sobreescribir
		fwrite($file, "\r\n");
		fwrite($file, $text1);
		fwrite($file, " respuesta1: " . $text2);
		fwrite($file, " respuesta2: " . $text3);
		fclose($file); 
	}else{
		echo("Message delivery failed...");
	}
?>
