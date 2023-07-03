<?php
require_once('src/Controller/TestProduct.php');
require_once('src/Controller/TestProducts.php');
require_once('src/Controller/Test_add.php');
require_once('src/Controller/login_control.php');

use Application\Controller\AddProd\AddProduct;
use Application\Controller\TP\Product;
use Application\Controller\TPS\homepage;
use Application\Controller\login\login;

try {
      if (isset($_GET['action']) && $_GET['action'] !== '') {
            if ($_GET['action'] === 'prod') {
                  if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $identifier = $_GET['id'];

                        (new Product())->execute($identifier);
                  } else {
                        throw new Exception("Nos produc was found");
                  }
            } elseif ($_GET['action'] === 'addProd') {

                  (new AddProduct)->execute($_POST);
            } elseif($_GET['action'] === 'login'){
                  (new login)->execute();      
            } else {
                  throw new Exception("Aucune action");
            }
      } else {

            (new homepage)->execute();

      }
} catch (Exception $e) {
      $errorMessage = $e->getMessage();

      echo $errorMessage;

}