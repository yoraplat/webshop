<?php

namespace App\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;
use App\Service\ShoppingCartService;

class ProductController extends AbstractController
{
    #[Route('/product/{id}', name: 'product')]
    public function index(Product $product): Response
    {
        $images = $product->getProductImages();

        return $this->render('front_end/product/detail.html.twig', [
            "product" => $product,
            "images" => $images
        ]);
    }
    
    #[Route('/cart/add', name: 'add_product_to_cart')]
    public function add(ShoppingCartService $cart, Request $request): Response
    {
        $referer = $request->headers->get('referer');
        
        // Get form data from jquery request, containing: "product_id" and "amount"
        
        $dataArray = ["product_id" => 13, "amount" => 1];
        $cart->addProduct($dataArray);

        return $this->redirect($referer);
    }
}
