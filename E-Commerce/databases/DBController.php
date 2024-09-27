<?php
declare(strict_types=1);


class DBController
{
    

    public function __construct(
        protected string $serverName = 'localhost',
        protected string $userName = 'root',
        protected string $password = '',
        protected string $bdname = 'shopee',
        public ?mysqli $conn = null
    )
    {
        $conn = new mysqli($serverName, $userName, $password, $bdname);
        if($this->conn->connect_error)
        {
            die('There are erron when you try on db');
        }
        echo 'Connected Successfuly';
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // close connection if it is valid
    protected function closeConnection()
    {
        if($this->conn != null)
        {
            $this->conn->close();
            $this->conn = null;
        }
    }
}

