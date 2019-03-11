<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 11.03.2019
 * Time: 15:16
 */

require_once "Character.php";


class Warrior extends Character
{
    protected $sword;
    protected $shield;


    function __construct($name, $strength, $intellect, $agility, $sword, $shield)
    {
        parent::__construct($name, $strength, $intellect, $agility);
        $this->sword = $sword;
        $this->shield = $shield;
    }


    function charge($target = "Некто")
    {
        echo "Вы совершили рывок в {$target}";
    }

    function showStat()
    {
        parent::showStat();
        echo "<p>Ваше оружие {$this->sword}</p>";
        echo "<p>Ваша щит {$this->shield}</p>";
    }
}