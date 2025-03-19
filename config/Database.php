<?php
namespace Config;

use PDO;
use Dotenv\Dotenv;

class Database {
    private static $instance = null;

    public static function getConnection() {
        if (self::$instance === null) {
            // Load .env configuration
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
            $dotenv->load();

            try {
                self::$instance = new PDO(
                    "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'],
                    $_ENV['DB_USER'],
                    $_ENV['DB_PASS']
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
