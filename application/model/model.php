<?php
	class Model
	{
		private $conexao;

		public function __construct()
		{
			$this->conexao = Config::conectar();
		}

		public function get($where=null)
		{
			
			if(isset($where)){
				return $this->conexao->find($where);
			}else{
				//traz todos resultados
				return $this->conexao->find();	
			}
		}

		public function insert($post)
		{
			//realiza insert retorno resultado
			//write concerns pega erros
			$success = $this->conexao->insert($post, array("w" => 1));
						
			if($success['ok'] == 1){
				return $success;
			}

			return FALSE;
		}

		public function remove($post)
		{
			//pega chave enviada c/ strloing id 
			foreach($post as $k => $v){
				//converte string em mongoObject id
				$id = new MongoId($post[$k]);
			}

			$success = $this->conexao->remove(array('_id' => $id), array("w" => 1));
			
			if($success['ok'] == 1){
				return $success;
			}

			return FALSE;
		}

		public function update($post)
		{
			//pega chave enviada c/ string id 
			foreach($post as $k => $v){
				//converte string em mongoObject id
				$id = new MongoId($post['id']);
				if($k != 'id'){
					$valor = $v;
					$campo = $k;
				}
			}	

			$success = $this->conexao->update(array('_id' => $id), array('$set'=>array($campo=>$valor)));
						
			if($success['ok'] == 1){
				return $success;
			}

			return FALSE;
		}		
	}
?>