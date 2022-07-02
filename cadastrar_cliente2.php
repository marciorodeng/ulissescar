<?php

	session_start();	
	
	require 'configuracao.php';	
	
	//require '../site2_back/application/config/conn.php';
	include '../site2_back/application/config/conexao.php';
	
	require '../site2_back/application/controllers/select.php';
	require '../site2_back/application/controllers/cadastrar_cliente2.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require_once ("../site2_back/application/views/head.php"); ?>
		<title><?php echo utf8_encode($row_empresa['NomeEmpresa']); ?></title>
	</head>
    <body>

		<?php require_once ("../site2_back/application/views/navegador.php"); ?>

		<?php require_once ("../site2_back/application/views/slide.php"); ?>	
		
		<?php require_once ("../site2_back/application/views/cadastrar_cliente2.php"); ?>
		
		<?php require_once ("../site2_back/application/views/footer.php"); ?>		
		
	</body>
</html>						