<?php
date_default_timezone_set('America/Sao_Paulo');
	Abstract Class conexao{
		public $servidor = '94.88.112.42';
		public $user = 'root';
		public $pass = 'usbw';
		public $banco = 'twetalk';
		public $conn;
		
		public function __construct(){
			$this->conexao();
		}
			
		private function conexao(){
			$this->conn = new mysqli($this->servidor, 
			$this->user, $this->pass, $this->banco);
			
		}
	}
?>





	