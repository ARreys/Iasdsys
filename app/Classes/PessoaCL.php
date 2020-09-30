<?php

use App\Model\Pessoa;

class PessoaCL
{
    private $id;
    private $nome;
    private $telefone;
    private $visitante;
    private $criado;
    private $alterado;
    private $deletedAt;
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getVisitante(){
		return $this->visitante;
	}

	public function setVisitante($visitante){
		$this->visitante = $visitante;
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

    public function marcarPresenca(){
        Pessoa::create([
            "nome" => $this->getNome(),
            "telefone" => $this->getTelefone(),
            "visitante" => $this->getVisitante()
        ]);
    }
}
