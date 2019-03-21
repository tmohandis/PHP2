<?php

namespace app\model;

class Products extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $category;

    public function __construct($name, $description, $price, $category)
    {
        parent::__construct();
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
    }


    public function getTableName()
    {
       return "products";
    }

    public function insertProduct () {
        $sql = "INSERT INTO `products` (`name`, `description`, `categoryID`, `price`) VALUES (':name', ':description',':category', ':price');";
        $this->db->execute($sql, [':name' => $this->name,
            ':description' => $this->description,
            ':category' => $this->category,
            ':price' => $this->price]);
    }

}