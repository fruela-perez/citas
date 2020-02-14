<?php

	$archivoCitas = __DIR__ . DIRECTORY_SEPARATOR . "citas.txt";

	$total = exec ( "wc -l " . $archivoCitas );		
	$linea = rand ( 1, $total );

	$fn = fopen ( $archivoCitas , "r" );

	$i = 0;
	while ( ! feof ( $fn ) )  
	{
		$i++;
		$cita = fgets ( $fn );
		
		if ( $i == $linea )
		{
			imprimir ( $cita );
			break;
		}
	}
	fclose ( $fn );

	function imprimir ( $linea )
	{
		$fragmentos = explode("#", $linea );
		
		echo "\n";
		echo $fragmentos[1];

		echo "\033[1m";
		echo $fragmentos[0];
		echo "\033[0m";
	}
?>


