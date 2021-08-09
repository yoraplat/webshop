<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ShoppingCartService
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    // Get number of products or an array of products
    public function getAllProducts($type) {
        $value = $this->session->get('cart');
        
        // If cart is empty null is returned
        if ($value == null) {
            return null;
        }

        if ($type == 'array') {
            
            return $value;

        } else if ($type == 'integer') {
            // Count the total amount of products, including products with multiple amounts selected
            $amount = 0;
            foreach($value as $product) {
                $amount = $amount + $product['amount'];
            }
            return $amount;
        }
    }

    public function totalPrice() {
        
    }

    public function addProduct($newProduct) {
        // Get all products currently inside the cart
        $products = $this->session->get('cart');

        // Check if product (product_id) is already inside the cart
        $counter = 0;

        if ($products != null) {
            foreach($products as $product) {
                if ($product['product_id'] == $newProduct['product_id']) {
                    // Matching product id found
                    // Update the corresponding product amount with the selected amount of the new product
                    $products[$counter]['amount'] = $product['amount'] + $newProduct['amount'];
    
                    // End the loop when product is found
                    // If no product is found product will be added to the cart
                    $this->session->set('cart', $products);
                    return true;
                }
                $counter++;
            }
        } else {
            // create a new array because the given products == null
            $newArray = [$newProduct];
            $this->session->set('cart', $newArray);
            // dd($this->session->get('cart'));
            return true;
        }

        
        // Add the new product to the cart if products was not empty
        array_push($products, $newProduct);
        $this->session->set('cart', $products);

        return true;
    }

    public function removeProduct() {

    }

    public function clearAll() {
        $this->session->remove('cart');
    }
}