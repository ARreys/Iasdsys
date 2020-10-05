<?php
namespace App\Classes;

use App\Model\Evento;

class EventoCL
{
    private $id;
    private $titulo;
    private $descricao;
    private $agendadoDia;
    private $agendadoHora;
    private $foto;
    private $usuario;
    private $local;
    private $criado;
    private $alterado;
    private $deletedAt;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getAgendadoDia(){
		return $this->agendadoDia;
	}

	public function setAgendadoDia($agendadoDia){
		$this->agendadoDia = $agendadoDia;
	}

	public function getAgendadoHora(){
		return $this->agendadoHora;
	}

	public function setAgendadoHora($agendadoHora){
		$this->agendadoHora = $agendadoHora;
	}

	public function getFoto(){
		return $this->foto;
	}

	public function setFoto($foto){
		$this->foto = $foto;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario(UsuarioCl $usuario){
		$this->usuario = $usuario;
	}

	public function getLocal(){
		return $this->local;
	}

	public function setLocal(Local $local){
		$this->local = $local;
	}

    /**
     * Get the value of criado
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Set the value of criado
     *
     * @return  self
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;

        return $this;
    }

    /**
     * Get the value of alterado
     */
    public function getAlterado()
    {
        return $this->alterado;
    }

    /**
     * Set the value of alterado
     *
     * @return  self
     */
    public function setAlterado($alterado)
    {
        $this->alterado = $alterado;

        return $this;
    }

    /**
     * Get the value of deletedAt
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set the value of deletedAt
     *
     * @return  self
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function create($local_id,$foto){
        Evento::create([
            "titulo" => $this->getTitulo(),
            "descricao" => $this->getDescricao(),
            "foto" => $foto,
            "local_id" => $local_id,
            "usuario_id" => session('id')
        ]);
    }
}
