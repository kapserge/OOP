<?php

declare(strict_types=1);

namespace App\Action;

use App\Service\UserService;
use App\Service\PostService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zend\Expressive\Template\TemplateRendererInterface;

final class HelloWorld
{
    private $renderer;

    private $userService;
    private $postService;

    public function __construct(TemplateRendererInterface $renderer,  PostService $postService)
    {
        $this->renderer = $renderer;
        //$this->userService = $userService;
        $this->postService = $postService;
    }

    public function handles(Request $request): Response
    {
        $value = $request->query->get('param1');
        $this->userService->find($value);

        return new Response($this->renderer->render('helloworld.html.twig'));
    }

    public function handle(Request $request): Response
    {
        $value = $request->query->get('param2');
        $this->postService->find($value);

        return new Response($this->renderer->render('helloworld.html.twig'));
    }
}
