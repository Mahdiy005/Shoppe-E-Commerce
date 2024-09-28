<?php
declare(strict_types=1);
ini_set('display_errors', 1);
class Product
{
    public $db = null;

    // use DI here to define connection of DB
    public function __construct(public DBController $dBController)
    {
        if(! isset($dBController->conn)) return null;
        $this->db = $dBController;
    }

    // function to fetch products
    public function getData(string $table): array
    {
        $q = "SELECT * FROM {$table}";
        $result = $this->db->conn->query($q);
        return $result->fetchAll();
        //<><><><><> for testing <><><><><><>
        // echo '<pre>';
        // var_dump($result->fetchAll());
        // echo '</pre>';
    }
}
