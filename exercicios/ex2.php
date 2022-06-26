<?php


/*Exercício 02: A fim de representar empregados em uma firma,
crie uma classe chamada Empregado que inclui as três informações a
seguir como atributos:

um primeiro nome
um sobrenome
um salário mensal.
Sua classe deve ter um construtor que inicializa os três atributos. 
Forneça um método set e get para cada atributo. 
Se o salário mensal não for positivo, configure-o como 0.0. 
Crie um método que exibe o salário anual e um que dê 10% de aumento no 
salário.*/


class Empregado {

    public string $primeiroNome;
    public string $sobrenome;
    public float $salarioMensal;



    public function __construct
    (
    string $primeiroNome, 
    string $sobrenome,
    float $salarioMensal
    ){
        $this->primeiroNome = $primeiroNome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
        
        
        if ($this->salarioMensal < 0){
            $this->salarioMensal = 0.0;
        }
    }


    //metodos get e set

    public function getPrimeiroNome (){
        return $this->primeiroNome;
    }
    public function setPrimeiroNome ($primeiroNome){
        $this->primeiroNome = $primeiroNome;
    }


    public function getSobrenome (){
        return $this->sobrenome;
    }
    public function setSobrenome ($sobrenome){
        $this->sobrenome = $sobrenome;
    }


    public function getSalarioMensal ($salarioMensal){
        return $this->salarioMensal;
    }
    public function setSalarioMensal ($salarioMensal){
        $this->salarioMensal = $salarioMensal;
    }


    public function salarioAnual(int $meses){
        $salarioAnual = $this->salarioMensal * $meses;
        echo ("Salário anual: ". $salarioAnual);
    }

    public function aumento($porcentagem){
        $this->salarioMensal = ($this->salarioMensal * $porcentagem) + $this->salarioMensal;
        echo ("Salário mensal: ". $this->salarioMensal);
    }

}


$empresa = new Empregado(
    "Amanda",
    'Pereira',
    1500    
);

echo ($empresa->salarioAnual(12));
echo ($empresa->aumento(0.10));



?>