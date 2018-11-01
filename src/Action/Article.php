<?php

declare(strict_types=1);

namespace App\Action;

use App\Service\PostService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zend\Expressive\Template\TemplateRendererInterface;

final class Article
{
    private $renderer;

    private $postService;

    public function __construct(TemplateRendererInterface $renderer, PostService $postService)
    {
        $this->renderer = $renderer;
        $this->postService = $postService;
    }

    public function handle(Request $request): Response
    {
        $value = $request->query->get('param2');
        $this->postService->find($value);

        return new Response($this->renderer->render('article.html.twig'));
    }
}
