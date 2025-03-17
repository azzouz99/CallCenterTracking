<?php
namespace Core;

use Config\Database;
use PDO;

class Model {
    protected $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }
}
