<?php
declare(strict_types=1);


class DBController
{
    

    public function __construct(
        protected string $driver = 'mysql',
        protected string $serverName = 'localhost',
        protected string $userName = 'root',
        protected string $password = '',
        protected string $dbname = 'shopee',
        public ?\PDO $conn = null // make this public to access in DI 
    )
    {
        try {
            $this->conn = new \PDO("$driver:host=$serverName;dbname=$dbname", $userName, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // close connection if it is valid where there are no reference to it
    public function __destruct()
    {
        $this->conn = null;
    }
}

