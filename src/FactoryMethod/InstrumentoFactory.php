<?php

namespace DesignPatterns\FactoryMethod;

interface InstrumentoFactory 
{    
    public function createInstrumento(InstrumentoInterface $instrument): InstrumentoInterface;
}