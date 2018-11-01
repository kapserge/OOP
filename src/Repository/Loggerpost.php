<?php

declare(strict_types=1);

namespace App\Repository;
use App\Entity\Post as PostEntity;
use App\Repository\Post;
use Psr\Log\LoggerInterface;

class Loggerpost implements Post{
    private $repository; 
    private $loggerPost;  

   public function __construct(Post $repository, LoggerInterface $loggerPost)
   {
       $this->repository = $repository;
       $this->loggerPost = $loggerPost;
   }   
    public function find(string $id):PostEntity
   {
           
    $post = $this->repository->find($id);
         
    return $post;
   } 

   public function findAll():PostEntity
   {
      
        $post = $this->repository->findAll();
      // $this->listePost->set($id, $user);     
        return $post;
   }  

}


