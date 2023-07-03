<?php
namespace Application\Controller\TP;

require_once('lib/dbConnect.php');
require_once('src/Model/Produit.php');
use Application\Lib\Database\DatabaseConnection;
use Application\Model\Product\ProductRep;

class Product
{
    public function execute(string $identifier)
    {
        $connection = new DatabaseConnection;
        $ProductRep = new ProductRep;
        $ProductRep->connection = $connection;
        $Product = $ProductRep->getProduct($identifier);
        
        require('Template/testProduct.php');
    }
}