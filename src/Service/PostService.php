<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Post as PostEntity;
use App\Repository\Loggerpost;
use App\Validator\Validator;

final class PostService
{
    private $validator;

    private $repository;

    public function __construct(Validator $validator, Loggerpost $postRepository)
    {
        $this->validator = $validator;
        $this->repository = $postRepository;
    }

    public function find(string $value): PostEntity
    {
        $this->validator->validate($value);
        // if ($this->cache->has($value)) {
        //     return $this->cache->get($value);
        // }
        $post = $this->repository->find($value);
        // $this->cache->set($value, $post);

        return $post;
    }
}