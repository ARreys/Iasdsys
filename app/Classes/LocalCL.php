<?php
namespace App\Classes;

class LocalCL
{
    private $id;
    private $capacidade;
    private $emUso;
    private $nome;
    private $rua;
    private $bairro;
    private $criado;
    private $alterado;
    private $deletedAt;
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getCapacidade(){
		return $this->capacidade;
	}

	public function setCapacidade($capacidade){
		$this->capacidade = $capacidade;
	}

	public function getEmUso(){
		return $this->emUso;
	}

	public function setEmUso($emUso){
		$this->emUso = $emUso;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getRua(){
		return $this->rua;
	}

	public function setRua($rua){
		$this->rua = $rua;
	}

	public function getBairro(){
		return $this->bairro;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getCriado(){
		return $this->criado;
	}

	public function setCriado($criado){
		$this->criado = $criado;
	}

	public function getAlterado(){
		return $this->alterado;
	}

	public function setAlterado($alterado){
		$this->alterado = $alterado;
	}

	public function getDeletedAt(){
		return $this->deletedAt;
	}

	public function setDeletedAt($deletedAt){
		$this->deletedAt = $deletedAt;
	}
}
