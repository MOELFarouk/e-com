<?php

declare(strict_types=0);

namespace Application\Model\users;

require_once('lib/dbConnect.php');

use Application\Lib\Database\DatabaseConnection;

class variable
{
    public string $user_id;
    public string $name;
    public string $email;
    public  string $password;
    public string $date;
}
class users
{
    
    public DatabaseConnection $dbConnect;
    public function getUsers()
    {
        $statement = $this->dbConnect->getConnection()->prepare(
            'SELECT user_id, name, email, password, DATE_FORMAT(date, "%d/%m/%Y") AS date FROM users ORDER BY date'
        );
        $users = [];
        while (($row = $statement->fetch())) {
            $user = new variable;
            $user->user_id = $row['user_id'];
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->password = $row['password'];
            $user->date = $row['date'];

            $users[] = $user;
        }
        return $users;
    }
    public function getUser(string $email)
    {

        $statement = $this->dbConnect->getConnection()->prepare(
            'SELECT user_id,name,email,password,admin,DATE_FORMAT(date, "%d/%m/%Y") AS date FROM users WHERE email = ?'
        );
        $statement->execute([$email]);
        $row = $statement->fetch();
        $user = new variable;
        $user->user_id = $row['user_id'];
        $user->name = $row['name'];
        $user->email = $row['email'];
        $user->password = $row['password'];
        $user->date = $row['date'];
        $user->admin = $row['admin'];

        return $user;
    }

    public function addAcount(string $name, string $email, string $password,bool $admin)
    {

        $statement = $this->dbConnect->getConnection()->prepare(
            'INSERT INTO users(user_id,name,email,password,date) VALUES(:user_id,?,?,NOW())'
        );
        $affectedLines = $statement->execute(['', $name, $email, $password]);

        return ($affectedLines > 0);
    }

    public function getAdmin(string $identifier)
    {

        $statement = $this->dbConnect->getConnection()->prepare(
            'SELECT user_id,name,email,password ,DATE_FORMAT(ad_date, "%d/%m/%Y") AS ad_date FROM admin WHERE user_id = ?'
        );
        $statement->execute([$identifier]);
        $row = $statement->fetch();
        $admin = new variable;
        $admin->user_id = $row['user_id'];
        $admin->name = $row['name'];
        $admin->email = $row['email'];
        $admin->password = $row['password'];
        $admin->date = $row['date'];

        return $admin;
    }
    public function getAdmins()
    {

        $statement = $this->dbConnect->getConnection()->prepare(
            'SELECT user_id,name,email,password ,DATE_FORMAT(ad_date, "%d/%m/%Y") AS ad_date FROM admin ORDER BY ad_date'
        );
        $admmins = [];
        while (($row = $statement->fetch())) {
            $row = $statement->fetch();
            $admin = new variable;
            $admin->user_id = $row['user_id'];
            $admin->name = $row['name'];
            $admin->email = $row['email'];
            $admin->password = $row['password'];
            $admin->date = $row['date'];

            $admins[] = $admin;
        }
        return $admins;
    }

    public function addAdmin(string $name, string $email, string $password)
    {

        $statement = $this->dbConnect->getConnection()->prepare(
            'INSERT INTO admin(admin_id,name,email,password,ad_date) VALUES(?,?,?,NOW())'
        );
        $affectedLines = $statement->execute(['', $name, $email, $password]);

        return ($affectedLines > 0);
    }
}
