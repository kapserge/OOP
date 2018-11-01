<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Post as PostEntity;
use Ramsey\Uuid\Uuid;

final class InMemoryPost implements Post
{
    private $posts = [];

    public function __construct()
    {
        $uuid = '69e7a80b-925d-4670-a274-812a67523f5a';
        $this->posts[$uuid] = new PostEntity($uuid, 'demo', 'demo', 'demo');
    }

    public function find(string $id): PostEntity
    {
        if (!isset($this->posts[$id])) {
            throw new \LogicException('Id does not exist');
        }

        return $this->posts[$id];
    }

    public function findAll(): PostEntity
    {

        return $this->posts[$id];
    }

    

   
}