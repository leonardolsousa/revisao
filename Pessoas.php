<?php

class Pessoa{

    private $nome;

    public function __construct($valor){
        $this->setNome($valor);
    }

   public function setNome($valor){
        $this->nome = $valor;
    }

    public function getNome(){
        return $this->nome;
    }
}

?>