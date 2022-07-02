<?php

	session_start();	
	
	require 'configuracao.php';	
	
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require_once ("../site2_back/application/views/head.php"); ?>
	</head>
    <body>

		<?php require_once ("../site2_back/application/views/navegador.php"); ?>

		<?php require_once ("../site2_back/application/views/slide.php"); ?>		
		
		<?php require_once ("../site2_back/application/views/login_vendedor.php"); ?>
		
		<?php require_once ("../site2_back/application/views/footer.php"); ?>
		
	</body>
</html>						