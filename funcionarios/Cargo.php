<?php
declare(strict_types=1);

namespace funcionarios;

//include('funcionarios\FuncionarioInterface.php');

class Cargo implements FuncionarioInterface{

    private ?string $nome = null;
    private ?int $idade = null;
    private ?string $cidade = null;

    public function __construct(?string $nome = null, ?int $idade = null, ?string $cidade = null)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        //return $this->nome = $nome;
        return $this->nome = $nome." Neves - Cargo: Análista de TI I";
    }

    public function getIdade():int
    {
        return $this->idade;
    }
    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    public function getCidade():string
    {
        return $this->cidade;
    }
    public function setCidade(string $cidade)
    {
        $this->cidade = $cidade;
    }

    
}


?>