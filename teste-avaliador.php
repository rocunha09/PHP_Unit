<?php


use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

//cria cenário para o teste
$leilao = new Leilao('Fiat 147 0KM');

$maria = new Usuario('Maria');
$joao = new Usuario('Joao');

$leilao->recebeLance(new Lance($joao, 2000));
$leilao->recebeLance(new Lance($maria, 2500));

$leiloeiro = new Avaliador();

//executa o código a ser testado
$leiloeiro->avalia($leilao);
$maiorValor = $leiloeiro->getMaiorValor();

//realiza o teste verificando se a saída é esperada.
$valorEsperado = 2500;

    if($valorEsperado == $maiorValor){
        echo "TESTE OK \n";

    } else {
        echo "TESTE FALHOU \n";

    }
