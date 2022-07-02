<?php

	session_start();	
	
	require 'configuracao.php';
	
	require '../site2_back/application/controllers/cadastrar_cliente3.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require_once ("../site2_back/application/views/head.php"); ?>
	</head>
    <body>

		<?php require_once ("../site2_back/application/views/navegador.php"); ?>

		<?php require_once ("../site2_back/application/views/slide.php"); ?>	
		
		<?php require_once ("../site2_back/application/views/cadastrar_cliente3.php"); ?>
		
		<?php require_once ("../site2_back/application/views/footer.php"); ?>		
		
	</body>
</html>						