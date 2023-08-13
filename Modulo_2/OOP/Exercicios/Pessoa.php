<?php

class Pessoa
{
    private string $nome;
    public int $idade;
    private string $corDosOlhos;
    private string $genero;
    public float $altura; // Metro
    public float $peso; // Kg

    public function __construct(string $nome, string $corDosOlhos, string $genero)
    {
        $this->nome = $nome;
        $this->setCorDosOlhos($corDosOlhos);
        $this->setGenero($genero);
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    private function setCorDosOlhos(string $corDosOlhos): void
    {
        switch ($corDosOlhos) {
            case "Azul":
                $this->corDosOlhos = $corDosOlhos;
                break;
            case "Castanho":
                $this->corDosOlhos = $corDosOlhos;
                break;
            case "Verde":
                $this->corDosOlhos = $corDosOlhos;
                break;
            case "Preto":
                $this->corDosOlhos = $corDosOlhos;
                break;
            default:
                echo "ERRO ao criar cor dos olhos -> Cor inválida, tente: Azul, Castanho, Verde, Preto" . PHP_EOL;
                break;
        }
    }

    private function setGenero(string $genero): void 
    {
        if ($genero == "Masculino") 
        {
            $this->genero = "Masculino";
        } 
        else if ($genero == "Feminino") 
        {
            $this->genero = "Feminino";
        }
        else 
        {
            echo "ERRO ao adicionar o gênero -> Gênero inválido, tente: Masculino ou Feminino" . PHP_EOL;;
        }
    }

    public function setAltura(float $altura): void 
    {
        $this->altura = $altura;
    }

    public function setPeso(float $peso): void 
    {
        $this->peso = $peso; 
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCorDosOlhos(): string 
    {
        return $this->corDosOlhos;
    }

    public function getGenero(): string 
    {
        return $this->genero;
    }

}

$pessoa = new Pessoa("Vinicius", "Castanho", "Masculino");
$pessoa->setAltura(1.68);
$pessoa->setIdade(18);
$pessoa->setPeso(63);

echo $pessoa->getNome() . PHP_EOL;
echo $pessoa->getCorDosOlhos() . PHP_EOL;
echo $pessoa->getGenero() . PHP_EOL;

echo $pessoa->idade . PHP_EOL;
echo $pessoa->altura . PHP_EOL;
echo $pessoa->peso . PHP_EOL;
