<?php
namespace Application\Model\Product;
require_once('lib/dbConnect.php');

use Application\Lib\Database\DatabaseConnection;

class Produit
{
    public string $prod_id;
    public string $nom;
    public string $prix;
    public string $descriptions;
    public string $date;
    public bool  $mention;

}

class ProductRep 
{
    public DatabaseConnection $connection;
    public function getProduct(string $identifier)
    {
        $statement = $this->connection->getConnection()->prepare
        (
            'SELECT prod_id, nom, prix, descriptions,DATE_FORMAT(date, "%d/%m/%Y ") AS date FROM produit WHERE prod_id = ?'
        );
        $statement->execute([$identifier]);

       
        $row = $statement->fetch();
            $produit = new Produit();
            $produit->nom = $row['nom'];
            $produit->prix = $row['prix'];
            $produit->date = $row['date'];
            $produit->descriptions = $row['descriptions'];
            $produit->prod_id = $row['prod_id'];
            
        return $produit;
    }
    public function getProducts(): array
    {
          // float is a misstake
        $statement = $this->connection->getConnection()->query(
            'SELECT prod_id, nom, prix, descriptions,DATE_FORMAT(date, "%d/%m/%Y ") AS date FROM produit ORDER BY date DESC LIMIT 0, 6'
        );
        $products = [];
        while(($row = $statement->fetch()))
        {
         $product = new Produit();
         $product->nom = $row['nom'];
         $product->prix = $row['prix'];
         $product->date = $row['date'];
         $product->descriptions = $row['descriptions'];
         $product->prod_id = $row['prod_id'];
       
         $products[] = $product;
       
        }
       return $products;
       }
       public function creatProduct( string $nom,  string $prix,  string $descriptions)
    {
        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO produit( nom, prix, descriptions, date) VALUES(?, ?, ?, ?,NOW(),?)'
        );
        $affectedLines= $statement->execute([ $nom, $prix, $descriptions]);
        
        return ($affectedLines > 0);
    }

   
}