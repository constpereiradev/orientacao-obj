<?php

    /*Crie uma função chamada divisao() que deverá receber dois números.
    Na função, verifique se algum dos númeors passdos
    por parâmetro é igual à 0, caso positivo, lance uma exceção
    
    em seguida, escreva um algoritmo responsável por executar a função
    divisao() forçando-a a lançar a exceção (passando 0 em algum
    parametro) e realize o tratamento de captura através do try catch. */
    

    function divisao(int $x, $y)
    {
        
        if ($x == 0 || $y == 0){
            
            throw new Exception("O número é igual a 0.");
        }
    }

    $status = false;

    $x = 5;
    $y = 10;

    try {
        $status = divisao($x, $y);
    } catch (Exception $e){
        echo $e->getMessage();
    } finally {
        echo "Status da operação: ". (int)$status;
        die();
    }

?>