<?php

namespace DesignPatterns\AbstractFactory;

/**
 * LivroPhp é a classe concreta da interface EditoraA
 */
class LivroMysql implements AbstractEditoraB
{
    private $title = null;
    private $author = null;
    private $pages = null;

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function setPages(int $pages)
    {
        $this->pages = $pages;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPages(): int
    {
        return $this->pages;
    }
}