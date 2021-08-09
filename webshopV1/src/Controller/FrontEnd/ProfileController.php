<?php

namespace App\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ShoppingCartService;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'profile')]
    public function index(ShoppingCartService $cart): Response
    {
        $value = $cart->getAllProducts('array');

        return $this->render('front_end/profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
    
    #[Route('/cart', name: 'cart')]
    public function cart(ShoppingCartService $cart): Response
    {
        $products = $cart->getAllProducts('array');

        return $this->render('front_end/profile/cart.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/orders', name: 'orders')]
    public function orders(ShoppingCartService $cart): Response
    {
        // $cart->clearAll();
        return $this->render('front_end/profile/orders.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
}
