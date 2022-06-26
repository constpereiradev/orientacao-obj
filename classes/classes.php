<?php
//definindo classes em php


class contaBancaria

{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;



    //metodo construct

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        echo ("Olá, ". $nomeTitular);
        //echo ("Eu sou o método construct.");

        // $this //aceita o metodo dentro da propria class

        $this -> banco = $banco;
        //o banco da class é igual ao banco do construct

        $this -> nomeTitular = $nomeTitular;
        $this -> numeroAgencia = $numeroAgencia;
        $this -> numeroConta = $numeroConta;
        $this -> saldo = $saldo;
    }

    //implementacao de metodos

        public function obterSaldo()
        {

            return "O saldo atual é: R$". $this->saldo;
        }

        //metodo depositar
        public function depositar($valor)
        {
            $this->saldo += $valor;
        }

        //metodo sacar

        public function sacar($valor)
        {
            $this->saldo -= $valor;
        }
}


$conta = new contaBancaria(
    //banco
    'Banco Inter',

    //nome do titular 
    'Amanda da Conceição Pereira',

    //agencia
    '8743',

    //conta
    '98654-90',

    //saldo
    0

); // criei uma instancia da classe (objeto)

//sempre que se cria essa instancia, o metodo construct é executado

echo $conta->obterSaldo(); //0
echo "<br>";

//depositar
$conta->depositar(300);

echo $conta->obterSaldo();


//sacar
$conta->sacar(200);

echo $conta->obterSaldo(); //100

exit(); //nada irá ser executado abaixo disso.


//acessando o objeto
var_dump($conta);
//acessando parte do objeto
var_dump($conta->banco);

?>