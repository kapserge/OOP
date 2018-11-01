<?php

declare(strict_types=1);

namespace App\Entity;

final class Post
{
    private $id;

    private $name;

    private $auteur;

    private $contenu;

    public function __construct(string $id, string $name,string $auteur,string $contenu)
    {
        $this->id = $id;
        $this->name = $name;
        $this->auteur = $auteur;
        $this->contenu = $contenu;
    }
}