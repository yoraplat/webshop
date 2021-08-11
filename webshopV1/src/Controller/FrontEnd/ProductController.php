<?php

namespace App\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;
use App\Service\ShoppingCartService;
use Symfony\Contracts\Translation\TranslatorInterface;

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
    public function add(ShoppingCartService $cart, Request $request, TranslatorInterface $translator): Response
    {
        // Url to reload the page, so that the updated amount of items in the cart is correct
        $referer = $request->headers->get('referer');
        
        $product_id = $request->get('product_id');
        $amount = $request->get('amount');
        $size = $request->get('size');
        $color = $request->get('color');
        
        // product_id and amount are by default not converted to an integer
        $dataArray = ["product_id" => (int)$product_id, "amount" => (int)$amount, "size" => $size, "color" => $color];
        $cart->addProduct($dataArray);
        
        // Create a flash message
        $translated = $translator->trans('Item(s) has been added to your cart');
        $this->addFlash('success', $translated);

        return $this->redirect($referer);

    }
}
