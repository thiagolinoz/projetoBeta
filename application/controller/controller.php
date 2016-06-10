<?php
	class Controller extends Library
	{

		public $variaveis = array();
		private $obj;

		public function __construct($pagina)
		{
			$this->obj = new Model();
			$this->$pagina();
		}
		
		protected function index()
		{
			$cursor = $this->obj->get();
			//guarda variaveis em um array
			$this->variaveis['primeira'] = $cursor;
			//carrega view c/ mesmo nome do metodo atual
			$this->carregaView(__FUNCTION__,$this->variaveis);
		}
		protected function about()
		{
			$cursor = $this->obj->get(array('title'=>'teste aviso'));
			$this->variaveis['primeira'] = $cursor;
			
			$this->carregaView(__FUNCTION__,$this->variaveis);
		}	

		protected function cadastro()
		{
			if(!empty($_POST)){
				$cursor = $this->obj->insert($_POST);
				if($cursor){
					$this->variaveis['msg'] = 'inserido com sucesso';
				}
			}
			
			$this->carregaView(__FUNCTION__,$this->variaveis);
		}

		protected function apagar()
		{
			if(!empty($_POST)){
				$cursor = $this->obj->remove($_POST);
				if($cursor){
					$this->variaveis['msg'] = 'removido com sucesso';	
				}
			}
			
			$result = $this->obj->get();
			$this->variaveis['primeira'] = $result;
			
			$this->carregaView(__FUNCTION__, $this->variaveis);
		}

		protected function atualizar()
		{
			if(!empty($_POST)){
				$cursor = $this->obj->update($_POST);
				if($cursor){
					$this->variaveis['msg'] = 'atualizado com sucesso';
				}
			}

			$result = $this->obj->get();
			$this->variaveis['primeira'] = $result;

			$this->carregaView(__FUNCTION__, $this->variaveis);	
		}

	}
?>