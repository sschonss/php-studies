<?php

namespace Luiz\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome,CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCPF(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 4) {
            echo "Nome precisa ter pelo menos 4 caracteres";
            exit();
        }
    }
}