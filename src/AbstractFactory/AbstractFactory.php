<?php

namespace DesignPatterns\AbstractFactory;

interface AbstractFactory
{
    public function makeLivroLinguagem();
    public function makeLivroBanco();
}