<?php

namespace App\Controllers;

use App\Models\home;

class Checkout extends BaseController {

    public function index() {
        if (isset($_GET['id']) == true || !empty(session('cart'))) {
            
            $id = $_GET['id'];
            $home = new home();
            $product = $home->find($id);
            $item = array(
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'product_img' => $product['product_img'],
                'quantity' => 1
            );
            $session = session();
            if ($session->has('cart')) {

                $index = $this->exists($id);

                $cart = array_values(session('cart'));

                if ($index == -1) {
                    array_push($cart, $item);
                } else {
                    $cart[$index]['quantity'] ++;
                }
                $session->set('cart', $cart);
            } else {
                $cart = array($item);
                $session->set('cart', $cart);
            }
            $data['items'] = array_values(session('cart'));
            return view('Checkout', $data);
        } else {
            return view('Checkout');
        }
    }

    private function exists($id) {
        // var_dump($id);exit;
        $items = array_values(session('cart'));
        //var_dump($items);exit;
        for ($i = 0; $i < count($items); $i++) {
            if ($items[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }

    //--------------------------------------------------------------------
}
