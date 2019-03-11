<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 11.03.2019
 * Time: 15:16
 */

require_once "Character.php";

class Priest extends Character
{


    protected $mace;
    protected $robe;

    function __construct($name, $strength, $intellect, $agility, $mace, $robe)
    {
        parent::__construct($name, $strength, $intellect, $agility);
        $this->mace = $mace;
        $this->robe = $robe;
    }

    function heal($target = "Некто")
    {
        echo "Вы исцелили союзника {$target}";
    }

    function showStat()
    {
        parent::showStat();
        echo "<p>Ваше оружие {$this->mace}</p>";
        echo "<p>Ваша одеяние {$this->robe}</p>";
    }
}