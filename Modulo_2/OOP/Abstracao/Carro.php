<?php

class Carro 
{
    public string $cor;
    public int $portas;
    public int $velocidade;
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

    public function setVelocidade(int $velocidade): void
    {
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