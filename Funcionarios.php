<?php
require_once("Pessoas.php");

class Funcionario extends Pessoa{

    private $salario;
    private $departamento;

    public function setSalario($valor){
        $this->salario = $valor;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setDepartamento($valor){
        $this->departamento = $valor;
    }

    public function getDepartamento(){
        return $this->departamento;
    }

}

$pessoa = new Pessoa("Pedro Paulo");
echo $pessoa->getNome();
echo "<br>";
$funcionario = new Funcionario("Pedro Paulo");
$funcionario->setSalario(1500);
$funcionario->setDepartamento("Tecnologia da Informacao");
echo $funcionario->getSalario();
echo "<br>";
echo $funcionario->getDepartamento();

?>