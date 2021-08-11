<?php
namespace App\Twig;


use App\Service\ShoppingCartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Extension\RuntimeExtensionInterface;
// use Doctrine\ORM\EntityManagerInterface;

class AppRuntime extends AbstractController implements RuntimeExtensionInterface
{

    public function __construct(ShoppingCartService $service)
    {
        $this->service = $service;
    }

    public function getCartCount()
    {
        $count = $this->service->getAllProducts('integer');
        
        if ($count == null) {
            return 0;
        } else {
            return $count;
        }
    }
    
    public function getProductById($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('App:Product')->find($id);
        
        return $product;        
    }
}
