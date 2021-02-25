<?php

namespace DesignPatterns\AbstractFactory;

class EditoraA implements AbstractFactory
{
    private $linguagem;
    private $banco;

    public function __construct()
    {
        $this->linguagem = new LivroPhp;
        $this->banco = new LivroMysql;
    }

    public function makeLivroLinguagem()
    {
        $this->linguagem->setTitle('PHP Essencial');
        $this->linguagem->setAuthor('Fulano de Tal');
        return $this->linguagem;
    }

    public function makeLivroBanco()
    {
        $this->banco->setTitle('Mysal, pra quem nunca ouviu falar');
        $this->banco->setAuthor('MySql Guy');
        $this->banco->setPages(300);
        return $this->banco;
    }
}