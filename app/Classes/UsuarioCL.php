<?php
namespace App\Classes;

use App\Model\Usuario;

class UsuarioCL
{
    private $id;
    private $nome;
    private $telefone;
    private $senha;
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

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    public function login()
    {
       $login = Usuario::where('id',$this->getId())->where('senha',$this->getSenha())->exists();
       if($login){
            return Usuario::find($this->getId());
       }else{
           return false;
       }
    }
}
