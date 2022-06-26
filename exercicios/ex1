<?php
declare(strict_types=1);


/*Exercício 01: Crie uma classe chamada Invoice que possa ser utilizado por uma loja de suprimentos de informática para representar uma fatura de um item vendido na loja. Uma fatura deve incluir as seguintes informações como atributos

número do item faturado,
descrição do item
quantidade comprada do item
preço unitário do item
Sua classe deve ter um construtor que inicialize os quatro atributos. 
Se a quantidade não for positiva, ela deve ser configurada como 0. 
Se o preço por item não for positivo ele deve ser configurado como 0.0. 
Forneça um método set e um método get para cada variável de instância. 
Além disso, forneça um método chamado getInvoiceAmount que calcula o valor 
da fatura (isso é, multiplica a quantidade pelo preço por item) e depois 
retorna o valor.*/


/*metodo set e get

    recomendado utilizar nos atributos privados, mas
    tambem os publicos

    get -> retorna algo
    set -> manipula o atributo e insere valor dentro dele

    ex: 

    $loja = new Venda;

    $loja->setNome("Mercadinho Mendes");
    echo ("O nome do nosso merdado é {$loja->getNome()}");

*/


class Invoice
{
    public int $numero;
    public string $descricao;
    public int $quantidade;
    public float $preco;


    public function __construct
    (
    int $numero, 
    string $descricao, 
    int $quantidade, 
    float$preco

    ){
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;

            if ($this->quantidade < 0){
                $this->quantidade = 0.0;
            }


        $this->preco = $preco;

    }


    //calcular valor da fatura
    public function getInvoiceAmount()
    {
        $this->preco = $this->preco * $this->quantidade;

        return "R$ ". $this->preco;
    }


    //metodos set e get para cada variavel de instancia

    //$numero

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero ($numero){
        $this->numero = $numero;

    }


    //$descricao
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }


    //$quantidade
    
    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }


    //$preco

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }
    
    
}



$suprimento = new Invoice(
    589,
    "Monitor",
    3,
    1500
);

echo ($suprimento->getInvoiceAmount()) //4500;

?>