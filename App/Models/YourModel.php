<?php

namespace App\Models;


class YourModel extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->getDatabase();
    }

    public function getSomeData()
    {
        $query = $this->db->query('SELECT * FROM test');

        return $query->fetchAll();
    }
}