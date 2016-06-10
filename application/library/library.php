<?php
	abstract class Library
	{

		public function carregaView($pagina,$variaveis=null)
		{
			//carrega view solicitada(parametro) c/ variaveis
			include(__DIR__."/../views/{$pagina}.php");
		}

	}	
?>