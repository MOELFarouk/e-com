<?php
declare(strict_types=0);
 namespace Application\Controller\controller;
 require_once('src/lib/dbConnect.php');
 require_once('src/Model/user.php');

 use Application\Lib\Database\DatabaseConnection;
 use Application\Model\users\users;

class Connection
{
    public function Verifie(array $email,array $password)
    {
       if(isset($email) && isset($password))
       {
        $usersREP=new users;
        $users = $usersREP->getUsers();
        $Admins = $usersREP->getAdmins();
        foreach ($users as $user)
        {
            if($user->email === $email && $user->password ===$password)
            {
                $_SESSION['LOGGED_USER'] = $user->email;
            }

        }
       }
    }
}