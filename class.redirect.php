<?php

	class redirect{
		
		
		public $redirectTable;
		public $httpDomain;
		public $uri;
		
		private $crud;
		
		
		public function __construct($_crud, $_redirectTable, $_httpDomain){
			if($_crud==null)
				throw new Exception('You need the database connection argument for '.__CLASS__.' class.');
			
			$this->crud = $_crud;
			$this->redirectTable = $_redirectTable;
			$this->httpDomain = $_httpDomain;
			$this->uri = $_SERVER['REQUEST_URI'];
			
			$this->redirect();
		}
		
		
		private function redirect(){
			$result = $this->crud->query("SELECT 
											from_url, to_url 
										FROM 
											".$this->redirectTable." 
										WHERE 
												(from_url = '".$this->httpDomain.$this->uri."' 
											OR 
												from_url = '".$this->httpDomain.$this->uri."/' 
											OR 
												from_url = '".$this->httpDomain.rtrim($this->uri, '/')."') 
											AND 
												active='1' 
											LIMIT 1");
			if($this->crud->num($result) > 0):
				header('Location:'.$result[0]['to_url']);
				exit();
			endif;
		}
		
		
	}

?>