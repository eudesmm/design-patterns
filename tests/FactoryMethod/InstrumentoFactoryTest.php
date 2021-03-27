<?php

namespace DesignPatterns\FactoryMethod;

class InstrumentoFactoryTest extends \PHPUnit\Framework\TestCase {

    public function testFactoryTeclado()
    {
        $teclado = (new InstrumentoConcreto)->createInstrumento(new Teclado());
        
        $this->assertEquals('Tocando teclado...', $teclado->tocar());
    }
    
    public function testFactoryBateria()
    {
        $bateria = (new InstrumentoConcreto)->createInstrumento(new Bateria());

        $this->assertEquals('Tocando bateria...', $bateria->tocar());
    }


}