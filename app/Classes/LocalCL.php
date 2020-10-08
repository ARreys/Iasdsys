<?php
namespace App\Classes;

use App\Model\Local;
use App\Model\Presenca;

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

    public function localDisponivel(){
        return Local::where('em_uso',1)->first();
    }

    public function alterarCapacidade($data, $local){
        $quantidade_agendada = Presenca::where('dia_presenca',$data)->count();
        //falta pegar quantidade marcada usar svg(soma de coluna)
        $quantidade_acompanhante = Presenca::where('dia_presenca',$data)->sum('quantidade_marcada');
        $quantidade_agendada += $quantidade_acompanhante;
        $quantidade_local = $local->capacidade;
        if($quantidade_agendada > $quantidade_local){//local ira lotar
            session(['msg' => [
                'tipo' => 'erro',
                'texto' => "A quantidade de pessoas já agendadas não é suportada em um local menor! No minimo um local com a capacidade igual $quantidade_agendada!"
            ]]);
            return false;
        }else{//local ainda ficara vago ou lotado
            return true;
        }
    }
}
