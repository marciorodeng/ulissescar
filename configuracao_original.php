<?php
//Dados da Empresa
$idSis_Empresa = 96;
define("IDSIS_EMPRESA", "96");
	
	require '../site2_back/application/config/conexao.php';
	require '../site2_back/application/controllers/select.php';


$site_empresa = $row_empresa['Site'];
$ativo_pagseguro = $row_documento['Ativo_Pagseguro'];

define("SITE_EMPRESA", $row_empresa['Site']);

define("URL", "https://www.enkontraki.com.br/". $row_empresa['Site']."/");
define("URL_NOTIFICACAO", "https://www.enkontraki.com.br/".$row_empresa['Site']."/notificacao.php");
define("EMAIL_LOJA", $row_documento['Email_Loja']);
define("EMAIL_PAGSEGURO", $row_documento['Email_Pagseguro']);
define("MOEDA_PAGAMENTO", "BRL");

if($ativo_pagseguro == "N"){
    //Credenciais do SandBox
	define("TOKEN_PAGSEGURO", $row_documento['Token_Sandbox']);
	define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
	define("URL_NOTIFICACAO_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/");
}elseif($ativo_pagseguro == "S"){
    //Credenciais do PagSeguro
	define("TOKEN_PAGSEGURO", $row_documento['Token_Producao']);
	define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
	define("URL_NOTIFICACAO_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v3/transactions/notifications/");
}