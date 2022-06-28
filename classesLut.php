<?php
include_once './metlutador.php';
class lutadores implements metlutador {
    private $nome,$nascionalidade,$categoria;
    private $idade;
    private $altura,$peso;
    private $vitorias,$derrotas,$empate;
    
        

   
   
    function getNome() {
        return $this->nome;
    }

     function getNascionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

     function getCategoria() {
        return $this->categoria;
    }

     function getVitorias() {
        return $this->vitorias;
    }

     function getDerrotas() {
        return $this->derrotas;
    }

     function getEmpate() {
        return $this->empate;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setNacionalidade($nascionalidade): void {
        $this->nascionalidadee = $nascionalidade;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setAltura($altura): void {
        $this->altura = $altura;
    }

     function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
        
    }

    private function setCategoria(): void {
       
        if ($this->peso < 52.2){
             $this->categoria= "invalido";
           }
        elseif ($this->peso <=70.3){
               $this->categoria='Leve';
            }
        elseif ($this->peso <=83.9) {
           $this->categoria="Médio";
            }
        elseif($this->peso <=120.2){
            $this->categoria="Pesado";
        }else{
            $this->categoria= "Invalido";
        }   
    }   
            
        
      

     function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

     function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    function setEmpate($empate): void {
        $this->empate = $empate;
    }

    function __construct($nome,$nascionalidade,$idade,$altura,$peso,$vitorias,$derrotas,$empate){
      $this->nome=$nome;
      $this->nascionalidade=$nascionalidade;
      $this->idade=$idade;
      $this->altura=$altura;
      $this->setPeso($peso);
      $this->vitorias=$vitorias;
      $this->derrotas=$derrotas;
      $this->empate=$empate;
      
       
    }
      function categoria($nome,$peso,$categoria) {
        $this->nome= $this->setNome($nome);
        $this->peso= $this->setPeso($peso);
        $this->categoria= $this->setCategoria($categoria);
    }

    public function apresentar() {
         echo"</br>Lutador: ".$this->nome."<br>";
        echo"Origem: ".$this->nascionalidade."<br>";
        echo "Com: ".$this->idade. " Anos"."<br>";
        echo "Medindo: ".$this->altura." Metros"."<br>";
        echo "Pesando: ".$this->getPeso()."<br>";
        echo"Com um numero de ".$this->getVitorias()."Vitorias"."<br>";
        echo "Com ".$this->getDerrotas(). " Derrotas"."<br>";
        echo "Com ".$this->getEmpate(). " Empates"."<br>";
    }

    public function empatarluta() {
         $this->setEmpate($this->empate+1);
    }

    public function ganharluta() {
        $this->setVitorias($this->vitorias+1);
    }

    public function perderluta() {
         $this->setDerrotas($this->derrotas+1);
    }

    public function status() {
         echo "<br>".$this->getNome()."</br>";
       echo "Categoria: ". $this->categoria."</br>";
       echo " Wins: ".$this->vitorias."</br>";
       echo " Losers: ". $this->derrotas."</br>";
       echo " Empate: ". $this->empate."</br>"; 
    }

}