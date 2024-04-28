<?php
declare(strict_types=1);

namespace funcionarios;

interface FuncionarioInterface{
    
    public function getNome():string;
    public function setNome(string $nome);
    public function getIdade():int;
    public function setIdade(int $idade);
    public function getCidade():string;
    public function setCidade(string $cidade);

}
?>