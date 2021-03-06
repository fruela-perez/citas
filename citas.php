<?php
	$archivoCitas = $argv [ 1 ];

	if ( ! file_exists ( $archivoCitas ) ) die ( "No existe el archivo " . $archivoCitas . PHP_EOL );

	$total = (int) str_replace( PHP_EOL, "", exec ( "wc -l " . $archivoCitas ) );		
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
		$fragmentos = explode ( "#", str_replace ( PHP_EOL, "", $linea ) );
		
		echo wordwrap ( "«" . trim ( $fragmentos[1] ) . "»", str_replace ( PHP_EOL, "", shell_exec ( 'tput cols' ) ), PHP_EOL, false ) . PHP_EOL;
		echo "\033[1m" . trim ( $fragmentos[0] ) . "\033[0m" . PHP_EOL . PHP_EOL; // Autor en negrita
	}
?>
