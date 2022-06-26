<?php
//definindo classes em php


class contaBancaria

{
    public $banco = "Inter";
    public $nomeTitular = "Amanda da Conceição Pereira";
    public $numeroAgencia = "3456";
    public $numeroConta = "242340";
    public $saldo = "R$500,00";

}


$conta = new contaBancaria(); // criei uma instancia da classe (objeto)


//acessando o objeto
var_dump($conta);

//acessando parte do objeto
var_dump($conta->banco);
?>