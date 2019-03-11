<?php
require_once "Priest.php";
require_once "Warrior.php";

$warrior = new Warrior("ВОЕН777", 5, 0, 1, "длинный меч", "деревянный щит");
$priest = new Priest("Олександр", 1 , 5, 1, "дубинка", "одеяние жреца");

$warrior->showStat();
$warrior->charge();
$warrior->jump();

$priest->showStat();
$priest->heal();
$priest->move("right");