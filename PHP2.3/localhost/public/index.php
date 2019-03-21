<?php
include "../engine/Autoload.php";
include "../config/config.php";

use app\model\Products;
use app\engine\Autoload;

spl_autoload_register([new Autoload(), 'loadClass']);


$product1 = new Products();
$product1->name = "Чайник";
$product1->description = "ЭТО Чайник";
$product1->price = 1000;
$product1->category = 1;
$product2 = new \app\model\Users();

var_dump($product1);
$product1->insertProduct();
var_dump($product1->getAll());



