<?php
	require_once './vendor/autoload.php';
	require_once 'php/getViajes.inc.php';
	
	$loader = new \Twig\Loader\FilesystemLoader('.');

	$twig = new \Twig\Environment($loader);
	
	$viaje = getViajes("0");
	$datosViajeAEnviar = [ "ciudad" => $viaje[0]["ciudad"],
		"imagenSecundaria1" => $viaje[0]["imagenesSecundarias"][0],
		"imagenSecundaria2" => $viaje[0]["imagenesSecundarias"][1],
		"texto" => $viaje[0]["texto"], 
		"fecha" => $viaje[0]["fecha"]
	];
	
	$argumentos = ['viaje' => $datosViajeAEnviar];
	
	$template = $twig -> load('templates/evento_imprimir.html');
	
	echo $template -> render($argumentos);
?>