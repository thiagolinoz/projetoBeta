<?php

	class Database
	{
		public static function conectar($colecao=null)
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