<?php
declare(strict_types=0);
 namespace Application\Controller\User_Con;
 require_once('lib/dbConnect.php');
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
        $usersREP->dbConnect = new DatabaseConnection;
        $users = $usersREP->getUsers();
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