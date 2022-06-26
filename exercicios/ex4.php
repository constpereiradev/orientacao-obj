<?php

/*Exercício 04: Escreva uma classe Ponto2D que represente um ponto 
no plano cartensiano. Além dos atributos por você identificados, 
a classe deve oferecer os seguintes membros:

Construtor que permita a inicialização do ponto na origem ou em um local 
informado por parâmetros.
Método para definir o local do ponto a partir de outro ponto;
Método de comparação de pontos;
Métodos de acesso getter e setter.
Método que permita calcular a distância do ponto que recebe a mensagem 
para outro.
Método que permita a criação de um novo ponto no mesmo local do ponto
que recebeu a mensagem(clone).*/



class Ponto2D {

    public float $eixoX;
    public float $eixoy;

    public function __construct
    (
        float $eixoX,
        float $eixoY
    ){
        $this->eixoX = $eixoX;
        $this->eixoY = $eixoY;


    }


    public function definirLocal(){
        
    }

}


$cartesiano = new Ponto2D(

    1, 
    2

);






?>