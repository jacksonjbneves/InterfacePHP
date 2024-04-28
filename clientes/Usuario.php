<?php
declare(strict_types=1);
namespace clientes;

class Usuario
{

    private ?string $nome = null;
    private ?int $idade = null;
    private ?string $cidade = null;

    public function __construct(?string $nome = null, ?int $idade = null, ?string $cidade = null)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(string $nome): string
    {
        return $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade(int $idade): int
    {
        return $this->idade = $idade;
    }

    public function getCidade()
    {
        return $this->cidade;
    }
    public function setCidade(string $cidade): string
    {
        return $this->cidade = $cidade;
    }
}
