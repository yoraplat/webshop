<?php

namespace App\Twig;

use App\Twig\AppRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use App\Service\ShoppingCartService;

class AppExtension extends AbstractExtension
{
    public function __construct(ShoppingCartService $service)
    {
        $this->service = $service;

    }

    public function getFunctions()
    {
        return array(
              new TwigFunction('getCartCount', array(AppRuntime::class, 'getCartCount')),
        );
    }
}
