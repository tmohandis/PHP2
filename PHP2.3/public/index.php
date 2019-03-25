<?php
include "../engine/Autoload.php";
include "../config/config.php";

use app\model\Products;
use app\engine\Autoload;

spl_autoload_register([new Autoload(), 'loadClass']);

$product1 = new Products("Чайник", "Это чайник", 1000, 1);
$product2 = new \app\model\Users();
$product3 = new Products("Продукт", "Это продукт", 1000, 1);


//var_dump($product1);
//var_dump($product1->getOne(1));;
//var_dump($product3->getOneObject(10));;
$product3->name = "Новый продукт";
$product3->updateProduct();


