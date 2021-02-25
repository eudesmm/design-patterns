<?php

namespace DesignPatterns\AbstractFactory;

class EditoraATest extends \PHPUnit\Framework\TestCase {

    public function testMakeLivroPhp()
    {
        $editoraA = new EditoraA;
        $livroLinguagem = $editoraA->makeLivroLinguagem();

        $this->assertInstanceOf(LivroPhp::class, $livroLinguagem);
    }

    public function testMakeLivroMySql()
    {
        $editoraA = new EditoraA;
        $livroLBd = $editoraA->makeLivroBanco();

        $this->assertInstanceOf(LivroMysql::class, $livroLBd);
    }


}