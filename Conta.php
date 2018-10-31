<?php

class Conta {

    private $cliente;
    private $numero;

    public function setCliente($valor){
        $this->cliente = $valor;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setNumero($valor){
        $this->numero = $valor;
    }

    public function getNumero(){
        return $this->numero;
    }
}

?>