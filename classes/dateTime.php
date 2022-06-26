<?php
//formatacao de data
//format()

//echo $data->format('d-m-Y M::i::s'). PHP_EOL;


//manipulacao de data e hora
//dateInterval()


$data = new DateTime();

$intervalo = new DateInterval('PT5M'); //periodo de 5 minutos(M)
$data-> add($intervalo); //adiciona o tempo a data atual

//subtrair:
$data->sub($intervalo);

//exercicio final


/*Crie uma data com a classe DateTime com a data e hora atuais.
Em seguida, subtraia 5 dias, 10 horas e 50 minutos dessa data e exiba
o resultado no seguinte formato:
    dia/mes/ano - hora:minuto:segundo*/



$dataAtual = new DateTime();
$intervaloo = new DateInterval('P5DT10H50M');

$dataAtual->sub($intervaloo);
var_dump($dataAtual);

?>