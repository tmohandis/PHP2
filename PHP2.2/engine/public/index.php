<?php
include "../engine/Autoload.php";
use app\model\Products;
use app\engine\Db;
spl_autoload_register([new Autoload(), 'loadClass']);

$product1 = new Products(new Db());


var_dump($product1);
