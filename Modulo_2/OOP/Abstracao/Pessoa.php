<?php

class Pessoa 
{
    public string $nome;
    public int $idade;
    public string $nacionalidade;
    

    public function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void 
    {
        $this->idade = $idade;
    }

    public function setNacionalidad(string $nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
    }
}
