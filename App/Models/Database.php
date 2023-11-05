<?php

namespace App\Models;

use PDO;

class Database
{
    private $db_host = 'localhost';
    private $db_user = 'webalexsolutions';
    private $db_pass = '';
    private $db_name = 'webalexsolutions';
    private $database;

    public function __construct()
    {
        $this->database = new PDO("mysql:db_host={$this->db_host};db_name={$this->db_name}", $this->db_user, $this->db_pass);
    }

    public function getDatabase()
    {
        return $this->database;
    }
}