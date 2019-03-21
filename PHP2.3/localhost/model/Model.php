<?php

namespace app\model;

use app\engine\Db;
use app\interfaces\IModel;


abstract class Model implements IModel
{

    protected $db;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryOne($sql, [':id'=>$id]);
    }

    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);

    }

    abstract public function getTableName();
}