<?php

require __DIR__.'/../vendor/autoload.php';

use DesignPatterns\FactoryMethod\Teclado;
use DesignPatterns\FactoryMethod\Bateria;
use DesignPatterns\FactoryMethod\InstrumentoConcreto;

class Client {

    public function __construct()
    {
        $teclado = (new InstrumentoConcreto)->createInstrumento(new Teclado());
        $bateria = (new InstrumentoConcreto)->createInstrumento(new Bateria());

        echo $teclado->tocar();
        echo PHP_EOL;
        echo $bateria->tocar();
        echo PHP_EOL;
    }

}

new Client;