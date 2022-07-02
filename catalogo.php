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
		
		<?php require_once ("../site2_back/application/views/catalogo.php"); ?>
		
		<?php require_once ("../site2_back/application/views/footer.php"); ?>
		
		<script src="../site2_back/js/Javascript.js"></script>

	</body>
	
</html>
