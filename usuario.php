<?php
	class Usuario{
		private $nome;
		private $nomeUsuario;
		private $email;
		private $senha;
		
		function __construct($nome, $nomeUsuario, $email, $senha){
			$this->nome = $nome;
			$this->nomeUsuario = $nomeUsuario;
			$this->email = $email;
			$this->senha = $senha;
		}
		
		
		public function getNome(){
			return $this->nome;
		}
		public function getUsuario(){
			return $this->nomeUsuario;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->senha;
		}

		public function setUsuario($valor){
			$this->nomeUsuario = $valor;
		}
		public function setEmail($valor){
			$this->email = $valor;
		}
		public function setSenha($valor){
			$this->senha = $valor;
		}
		public function setNome($valor){
			$this->nome = $valor;
		}
		
	}
?>