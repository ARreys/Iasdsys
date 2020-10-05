<?php
namespace App\Classes;

use DateTime;
use App\Model\Pessoa;

class PessoaCL
{
    private $id;
    private $nome;
    private $telefone;
    private $visitante;
    private $dataNasc;
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
    /**
     * Get the value of data_nasc
     */
    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    /**
     * Set the value of data_nasc
     *
     * @return  self
     */
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;

        return $this;
    }

    public function verificarIdade($tipo = 1){
    	$time = strtotime($this->getDataNasc());
    	if($time === false){
            return false;
        }
        $year_diff = '';
        $date = date('Y-m-d', $time);
        list($year,$month,$day) = explode('-',$date);
        $year_diff = date('Y') - $year;
        $month_diff = date('m') - $month;
        $day_diff = (date('d') - $day) * -1;
        if ($month_diff < 0 || ($month == date('m') && $day > date('d')) ){
            $year_diff--;
        }
        if($tipo == 1){
            return ($year_diff >= 13)?true:false;
        }else{
            return $year_diff;
        }
    }

    public function create(){
       $pessoa = Pessoa::create([
            "nome" => $this->getNome(),
            "telefone" => $this->getTelefone(),
            "data_nasc" => $this->getDataNasc(),
            "visitante" => $this->getVisitante()
        ]);
        return $pessoa->fresh();
    }


}
