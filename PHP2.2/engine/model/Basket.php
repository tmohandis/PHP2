<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 14.03.2019
 * Time: 14:11
 */

namespace app\model;
use app\model\Products;

class Basket
{
    protected $products = [];


    public function __construct(array $products)
    {
        $this->products = $products;
    }


    function addProduct(Products $product) {
        array_push($this->products, $product);
    }

    function deleteProduct (Products $product ) {
        unset($this->products[$product]);
    }
}