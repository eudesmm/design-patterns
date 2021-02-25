<?php

namespace DesignPatterns\AbstractFactory;

interface AbstractEditoraB
{
    public function getTitle(): string;
    public function getAuthor(): string;
    public function getPages(): int;
}