<?php
namespace Application\Controller\TPS;

require_once('lib/dbConnect.php');
require_once('src/Model/Produit.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Product\ProductRep;

class homepage
{
    public function execute()
    {
        $ProductstRep = new ProductRep;
        $ProductstRep->connection = new DatabaseConnection;
        $Products = $ProductstRep->getProducts();
        require('Template/homepage.php');
    }
}