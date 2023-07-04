<?php
declare(strict_types=0);
namespace Application\Controller\User_Con;

require_once('lib/dbConnect.php');
require_once('src/Model/user.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\users\users;

class Connection
{
    public function Verifie(array $input)
    {
        $usersREP = new users;
        $usersREP->dbConnect = new DatabaseConnection;
        $users = $usersREP->getUsers();
        $email= "";
        $password= "";
        if(!empty($input['email'])  && !empty($input['password']))
        {
            $email=$input['email'];
            $password=$input['password'];
            foreach ($users as $user) {
                if($email === $user->email && $password === $user->password)
                {
                    $_SESSION['LOGGED_USER'] = $email;
                    header('index.php?action=')
                }
            }
        }
    }
}