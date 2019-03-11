<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 11.03.2019
 * Time: 15:09
 */

class Character
{
    protected $name;
    protected $strength;
    protected $intellect;
    protected $agility;


    function __construct($name, $strength, $intellect, $agility)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->intellect = $intellect;
        $this->agility = $agility;
    }


    function move($direction){
        switch ($direction) {
            case "up":
                echo "<p>Ваш персонаж переместился наверх</p>";
                break;
            case "down":
                echo "<p>Ваш персонаж переместился вниз</p>";
                break;
            case "left":
                echo "<p>Ваш персонаж переместился влево</p>";
                break;
            case "right":
                echo "<p>Ваш персонаж переместился вправо</p>";
                break;
        }
    }

    function jump() {
        echo "<p>Ваш персонаж подпрыгнул</p>";
    }

   function showStat() {
        echo "<h1>{$this->name}</h1>";
        echo "<p>Ваша сила {$this->strength}</p>";
        echo "<p>Ваша ловкость {$this->agility}</p>";
        echo "<p>Ваш интеллект {$this->intellect}</p>";
    }

}