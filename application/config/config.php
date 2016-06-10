<?php
	
	class Config
	{

		public static function baseUrl()
		{
			return "http://".$_SERVER['SERVER_NAME']."/projetoBeta/";
		}

		public static function conectar()
		{
			//conecta mongodb e passa nome da colecao como parametro
			return self::conexao('post');
		}

		private function conexao($colecao=null)
		{
			#Conecta c/ mongodb
			$m = new MongoClient();
			#nome da base: mydb
			$db = $m->mydb;
			#nome da colecao passada por parametro 
			return $collection = $db->$colecao;
		}	
	}	
?>