<?php
	$archivoCitas = __DIR__ . DIRECTORY_SEPARATOR . "citas.txt";

	$total = (int) str_replace( "\n", "", exec ( "wc -l " . $archivoCitas ) );		
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
		$fragmentos = explode ( "#", str_replace ( "\n", "", $linea ) );
		
		echo "\n"     .  romperLineas ( "«" . $fragmentos[1] . "»" ) . "\n";
		echo "\033[1m" . $fragmentos[0] . "\033[0m"; // Autor en negrita
		echo "\n\n";
}

	function romperLineas ( $text ) 
	{                
	     return wordwrap ( $text, str_replace ( "\n", "", shell_exec ( 'tput cols' ) ), "\n", false );
	}
?>