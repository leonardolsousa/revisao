<?php

class Pessoa{
    private $nome;
    private $endereco;


    public function setNome($valor){
        $this->nome = $valor;
    }

    public function getNome(){
        $nome = $this->nome;
        return $this->transformUpperCase($nome);
    }

    public function setEndereco($valor){
        $this->endereco = $valor;
    }

    public function getEndereco(){
        $endereco = $this->endereco;
        return $this->transformUpperCase($endereco);
    }

    private function transformUpperCase($palavra){
        return strtoupper($palavra);
    }
}

$pessoa = new Pessoa();
$pessoa->setNome("fabio");
$pessoa->setEndereco("rua das couves");
echo $pessoa->getNome();
echo "<br>";
echo $pessoa->getEndereco();