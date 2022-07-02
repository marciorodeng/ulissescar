<?php
//Dados da Empresa	
$idSis_Empresa=96;
define("IDSIS_EMPRESA", "96");	
	
	require '../site2_back/application/config/conexao.php';
	require '../site2_back/application/controllers/select.php';

	$site_empresa = $row_empresa['Site'];
	$ativo_pagseguro = $row_documento['Ativo_Pagseguro'];

	define("SITE_EMPRESA", $row_empresa['Site']);

	require '../site2_back/application/controllers/pagseguro.php';