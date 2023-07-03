<?php
declare(strict_types=0);

 namespace Application\Controller\login;

 require_once('lib/dbConnect.php');
 require_once('src/Model/user.php');

 use Application\Lib\Database\DatabaseConnection;
 use Application\Model\users\users;

 class login
 {
    public function execute()
    {
        $usersREP = new users;
        $usersREP->dbConnect = new DatabaseConnection;
        $users = $usersREP->getUsers();
        require('Template/login.php');
    }
 }