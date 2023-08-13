<?php

class Carro 
{
    private string $cor;
    public int $portas;
    private int $velocidade;
    public bool $faroisLigados;
    public bool $transmissaoManual;

    public function __construct(int $portas, string $cor)
    {
        $this->portas =  $portas;
        $this->cor = $cor;
    }

    public function setCor(string $cor): void 
    {
        $this->cor = $cor;
    }

    public function getCor(): string 
    {
        return $this->cor;
    }

    public function setPortas(int $portas): void 
    {
        $this->portas = $portas;
    }

    public function getVelocidade(): int 
    {
        return $this->velocidade;
    }

    public function setVelocidade(int $velocidade): void
    {
        $velocidade = $velocidade < 0 ? 0 : $velocidade;

        $this->velocidade = $velocidade;
    }
    
    public function setFarois(bool $faroisLigados): void 
    {
        $this->faroisLigados = $faroisLigados;
    }

    public function setTransmissaoManual(bool $transmissaoManual): void 
    {
        $this->transmissaoManual = $transmissaoManual;
    }
}

$carro = new Carro(4, 'Branco');