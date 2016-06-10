<?php
	abstract class Library 
	{
		//dados de configuracao
		public $dados = array();

		public function carregaView($pagina,$variaveis=null,$dados=null)
		{
			$dados['base_url'] = Config::baseUrl();
			
			include(__DIR__."/../views/includes/head.php"); 
			//carrega view solicitada(parametro) c/ variaveis
			include(__DIR__."/../views/{$pagina}.php");
			include(__DIR__."/../views/includes/footer.php"); 
		}

	}	
?>