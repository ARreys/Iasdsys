<?php
class PresencaCL
{
    private $id;
    private $pessoa;
    private $local;
    private $quantidadeMarcada;
    private $criado;
    private $alterado;
    private $deletedAt;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getPessoa(){
		return $this->pessoa;
	}

	public function setPessoa(PessoaCL $pessoa){
		$this->pessoa = $pessoa;
	}

	public function getLocal(){
		return $this->local;
	}

	public function setLocal(LocalCL $local){
		$this->local = $local;
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
     * Get the value of quantidadeMarcada
     */
    public function getQuantidadeMarcada()
    {
        return $this->quantidadeMarcada;
    }

    /**
     * Set the value of quantidadeMarcada
     *
     * @return  self
     */
    public function setQuantidadeMarcada($quantidadeMarcada)
    {
        $this->quantidadeMarcada = $quantidadeMarcada;
    }
}
