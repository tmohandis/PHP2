<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 14.03.2019
 * Time: 14:20
 */

namespace app\model;


class Order
{
    protected $number;
    protected $card;
    protected $address;
    protected $basket;
    protected $info;

    public function __construct($number, $card, $address, $basket, $info)
    {
        $this->number = $number;
        $this->card = $card;
        $this->address = $address;
        $this->basket = $basket;
        $this->info = $info;
    }


    function sendOrder() {
        echo "Ваш заказ №{$this->number} отправлен по адресу {$this->address}";
    }

    function getOrderInfo () {
        return $this->info;
    }
}