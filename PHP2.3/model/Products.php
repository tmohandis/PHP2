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
        $this->id = $this->getID($name, $description, $price, $category);
    }


    public function getTableName()
    {
       return "products";
    }

    public function getID($name, $description, $price, $category ) {
        $sql = "SELECT `id` FROM `products` WHERE `name`=:name AND `description`=:description AND `categoryID`=:category AND `price`=:price;";
        return (int)$this->db->queryOne($sql, [':name' => $name,
            ':description' => $description,
            ':category' => $category,
            ':price' => $price])['id'];
    }

   public function getIDN() {
        $sql = "SELECT `id` FROM `products` WHERE `name`=:name AND `description`=:description AND `categoryID`=:category AND `price`=:price;";
        $this->id = (int)$this->db->queryOne($sql, [':name' => $this->name,
            ':description' => $this->description,
            ':category' => $this->category,
            ':price' => $this->price])['id'];
    }


    public function insertProduct () {
        $sql = "INSERT INTO `products` (`name`, `description`, `categoryID`, `price`) VALUES (:name, :description, :category, :price);";
        $this->db->execute($sql, [':name' => $this->name,
            ':description' => $this->description,
            ':category' => $this->category,
            ':price' => $this->price]);
    }

    public function deleteProduct () {
        $sql = "DELETE FROM `products` WHERE `products`.`id` = :id;";
        $this->db->execute($sql, [':id' => $this->id]);
    }

    public function updateProduct () {
        var_dump($this->name);
        var_dump($this->description);
        var_dump($this->category);
        var_dump($this->price);
        var_dump($this->id);
        $sql = "UPDATE `products` SET `name` = :name, `description` = :description, `categoryID` = :category, `price` = :price WHERE `products`.`id` = :id;";
        $this->db->execute($sql, [':name' => $this->name,
            ':description' => $this->Юdescription,
            ':category' => $this->category,
            ':price' => $this->price,
            ':id' => $this->id
        ]);
    }

}