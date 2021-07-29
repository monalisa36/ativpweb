
<?php
	class Usuario{
		private $nomeCompleto;
		private $nomeUsuario;
		private $email;
		private $senha;
		
		function __construct($nomeCompleto, $nomeUsuario, $email, $senha){
			$this->nomeCompleto = $nomeCompleto;
			$this->nomeUsuario = $nomeUsuario;
			$this->email = $email;
			$this->senha = $senha;
		}
		
		public function getNomeCompleto(){
			return $this->nomeCompleto;
		}
		public function getNomeUsuario(){
			return $this->nomeUsuario;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->senha;
		}
    
    public function setNomeCompleto($valor){
			$this->nomeCompleto = $valor;
		}
		public function setNomeUsuario($valor){
			$this->nomeUsuario = $valor;
		}
		public function setEmail($valor){
			$this->email = $valor;
		}
		public function setSenha($valor){
			$this->senha = $valor;
		}
		
		
	}
?>
