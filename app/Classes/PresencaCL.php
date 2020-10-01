<?php
namespace App\Classes;

use App\Model\Local;
use App\Model\Presenca;

class PresencaCL
{
    private $id;
    private $pessoa;
    private $local;
    private $diaPresenca;
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
        if(!is_null($quantidadeMarcada)){
            $this->quantidadeMarcada = $quantidadeMarcada;
        }else{
            $this->quantidadeMarcada = 0;
        }
    }
    /**
     * Get the value of diaPresenca
     */
    public function getDiaPresenca()
    {
        return $this->diaPresenca;
    }

    /**
     * Set the value of diaPresenca
     *
     * @return  self
     */
    public function setDiaPresenca($diaPresenca)
    {
        $this->diaPresenca = $diaPresenca;

        return $this;
    }
    public function proximaData($dia = 'Saturday'){
         return date('Y-m-d',(strtotime("next $dia")));
    }

    public function verficarLotacao($data, $local)
    {
        //quantidade de pessoas querendo se agendar com ou sem acompanhantes
        $quantidade_adicionar = 1 + $this->getQuantidadeMarcada();
        $quantidade_agendada = Presenca::where('dia_presenca',$data)->count();
        //falta pegar quantidade marcada usar svg(soma de coluna)
        $quantidade_acompanhante = Presenca::where('dia_presenca',$data)->sum('quantidade_marcada');
        $quantidade_agendada += $quantidade_acompanhante + $quantidade_adicionar;
        $quantidade_local = $local->capacidade;
        if($quantidade_agendada > $quantidade_local){//local ira lotar
            session(['msg' => [
                'tipo' => 'erro',
                'texto' => "Agendamento negado! \n
                            Quantidade local: {$quantidade_local}! \n\t
                            Lotação calculada: ".($quantidade_agendada - $quantidade_local). " pessoa(s) a mais"
            ]]);
            return false;
        }else{//local ainda ficara vago ou lotado
            return true;
        }
    }

    public function agendarPresenca($pessoa,$local,$data)
    {
        Presenca::create([
            "pessoa_id" => $pessoa->id,
            "local_id" => $local->id,
            "quantidade_marcada" => $this->getQuantidadeMarcada(),
            "dia_presenca" => $data
        ]);
    }


}
