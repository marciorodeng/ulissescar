<?php 
	session_start();	
	
	include './configuracao.php';	
	
	//require '../site2_back/application/config/conn.php';
	
	include '../site2_back/application/config/conexao.php';

	require '../site2_back/application/controllers/select.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require_once ("../site2_back/application/views/head.php"); ?>
	</head>
    <body>

		<?php require_once ("../site2_back/application/views/navegador.php"); ?>

		<?php require_once ("../site2_back/application/views/slide.php"); ?>
	
		<?php require_once ("../site2_back/application/views/pedido.php"); ?>
	
		<?php require_once ("../site2_back/application/views/footer.php"); ?>
		
	</body>
	
</html>
