<?php

namespace App\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        
        return $this->render('front_end/home/index.html.twig', [
            'products' => $products,
        ]);
    }
    
    #[Route('/products/load', name: 'products_load')]
    public function load(Request $request): Response
    {
        // Get the index to determine the start index for loading products
        $offset = $request->get('index');
        $limit = 40;

        $products = $this->getDoctrine()->getRepository(Product::class)->load($offset, $limit);

        $productsArr = array();

        foreach($products as $product) {
            $productArr = array();

            array_push($productArr, $product->getId(), $product->getTitle(), $product->getDescription(), $product->getThumbnail());
            array_push($productsArr, $productArr);
        }

        $products = $productsArr;

        return new JsonResponse($products);
    }
}
