<?php

namespace DesignPatterns\FactoryMethod;

class InstrumentoConcreto implements InstrumentoFactory
{
    public function createInstrumento(InstrumentoInterface $instrumento) : InstrumentoInterface
    {
        $instrumento->setExecucao('Tocando');
        return $instrumento;
    }
}