<?php

namespace Application\Controller\AddProd;

require_once('lib/dbConnect.php');
require_once('src/Model/Produit.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Product\ProductRep;

class AddProduct
{
    public function execute(array $input)
    {
        $ProductRep = new ProductRep();
        $ProductRep->connection = new DatabaseConnection();
        $nom = '';
        // float is a misstake
        $prix = '';
        $descriptions = '';

        if (!empty($input['nom']) && !empty($input['prix']) && !empty($input['descriptions'])) {
            $name = $input['nom'];
            $price = $input['prix'];
            $descriptions = $input['descriptions'];
        } else {

            throw new \Exception('Les données du formulaire sont invalides.');
        }

       
        $success = $ProductRep->creatProduct($nom, $prix, $descriptions);

        if (!$success) {
            throw new \Exception('Impossible d\'ajouter un produit!');
        } else {
            header('Location: index.php');
        }
    }
}