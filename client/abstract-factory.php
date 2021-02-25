<?php

require __DIR__.'/../vendor/autoload.php';

$abstract_factory = new DesignPatterns\AbstractFactory\EditoraA;

$livro_php = $abstract_factory->makeLivroLinguagem();
$livro_mysql = $abstract_factory->makeLivroBanco();

echo $livro_php->getTitle() . ' - ' . $livro_php->getAuthor();
echo PHP_EOL;
echo $livro_mysql->getTitle(). ' - ' . $livro_mysql->getAuthor(). ' - ' . $livro_mysql->getPages(). ' pages';
