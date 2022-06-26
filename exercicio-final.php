<?php
declare(strict_types=1);

//EXERCÍCIO FINAL AULA DE PHP OO

/*crie uma classe chamada "Venda" com os atributos privados:
- data, produto, quantidade e valorTotal. crie um metodo capaz de exibir os
dados da venda. crie uma instancia da classe e passe os
atributos através de um método construtor.
em seguida, invoque o método responsavel por exibir o conteudo da venda
devidamente formatado.*/



class venda
{

    //criacao da class com dados privados 
    
    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valorTotal;



    //passando parametros da class no metodo construct
    public function __construct
    (string $data, 
    string $produto, 
    int $quantidade, 
    float $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;

    }


    //function de exibir os elementos
    public function exibir(){

        echo ("Data: ". $this->data);
        echo ("<br>");
        echo ("Produto: ". $this->produto);
        echo ("<br>");
        echo ("Quantidade: ". $this->quantidade);
        echo ("<br>");
        echo ("Valor total: ". $this->valorTotal);
        
    }
}

//atribuindo os elementos do obj
$venda = new venda(
    '26/06/2022',
    'Tênis Nike',
    1,
    500.00
);


//mostrando os elementos
echo ($venda->exibir());

?>