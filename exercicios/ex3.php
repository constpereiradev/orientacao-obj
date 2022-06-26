<?php

/*Exercício 03: Escreva uma classe Contador,
que encapsule um valor usado para contagem de itens ou eventos.
A classe deve oferecer métodos que devem:

Zerar;
Incrementar;
Retornar o valor do contador. */

class Contador {

    public int $tempo;


    public function __construct(int $tempo)
    {
        $this->tempo = $tempo;
    }


    public function zerar (){
        $this->tempo = 0;

        echo ("Contador em: ". $this->tempo);

    }

    public function incrementar(){
        echo ("Contador: ");
        while($this->tempo < 50){
            $this->tempo++;

            echo ($this->tempo);
        }
    }

    public function getTempo (){
        return $this->tempo;
    }
}


$contador = new Contador(
    0
);

echo ($contador->zerar());//0
echo ($contador->getTempo()); //retorna o tempo (0)
echo ($contador->incrementar()); //0 ate 50
echo ("Contador em: ". $contador->getTempo()); //retorna o tempo (50)

?>