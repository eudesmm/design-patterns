<?php

namespace DesignPatterns\FactoryMethod;

use DesignPatterns\FactoryMethod\InstrumentoInterface;

class Bateria implements InstrumentoInterface 
{
    private $execucao;

    public function setExecucao(string $execucao)
    {
        $this->execucao = $execucao;
    }

    public function tocar()
    {
        return $this->execucao . ' bateria...';
    }
}