<?php

namespace DesignPatterns\FactoryMethod;

interface InstrumentoInterface 
{
    public function setExecucao(string $execucao);
    public function tocar();
}
