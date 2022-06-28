<?php
require_once './classesLut.php';
class luta{
    private $desafiado=lutadores::class;
    private $desafiante =lutadores::class;
    private $rounds;
    private $aprovada;
    
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }

    function marcarluta($l1,$l2){
        if($l1->getCategoria() === $l2->getCategoria()&& $l1 != $l2){
            $this->aprovada=True;
            $this->desafiado=$l1;
            $this->desafiante=$l2;
        }else{
            $this->aprovada=False;
            $this->desafiado=Null;
            $this->desafiante=Null;
            echo"<p>Essa Luta não pode acontecer</p>";
        }
    }
    function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $venc= rand(0,2);
            switch ($venc) {
                case 0:
                    echo "<p>Empate</p>";
                    $this->desafiado->empatarluta();
                    $this->desafiante->empatarluta();
                    
                case 1:
                    echo "<p>Vencedor: ".$this->desafiado->getNome()."</p>";
                    $this->desafiado->ganharluta();
                    $this->desafiante->perderluta();
                    break;
                case 2:
                    echo "<p>Vencedor: ".$this->desafiante->getNome()."</p>";
                    $this->desafiado->perderluta();
                    $this->desafiante->ganharluta();
                default:
                    break;
            }
        }
    }
}
