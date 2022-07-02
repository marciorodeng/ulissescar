<?php
	//include_once("php/conn.php");
	session_start();	
	
	require 'configuracao.php';	
	
	//require '../site2_back/application/config/conn.php';
	include '../site2_back/application/config/conexao.php';
	
	require '../site2_back/application/controllers/select.php';
	require '../site2_back/application/controllers/cadastro_realizado.php';	

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require_once ("../site2_back/application/views/head.php"); ?>
	</head>
    <body>

		<?php require_once ("../site2_back/application/views/navegador.php"); ?>

		<?php require_once ("../site2_back/application/views/slide.php"); ?>
		
		<?php require_once ("../site2_back/application/views/cadastro_realizado.php"); ?>
		
		<?php require_once ("../site2_back/application/views/footer.php"); ?>

	</body>
</html>						