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
        echo ("Eu sou o método construct.");

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

            return "Olá! Eu sou o método obterSaldo()";
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
    500.00

); // criei uma instancia da classe (objeto)

//sempre que se cria essa instancia, o metodo construct é executado

echo $conta->obterSaldo();

//acessando o objeto
var_dump($conta);

exit(); //nada irá ser executado abaixo disso.



//acessando parte do objeto
var_dump($conta->banco);

?>