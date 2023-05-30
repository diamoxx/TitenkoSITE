<?php

namespace Models;

class User extends Model
{
    public const table = 'users';
    
    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $user = [];

        /**
         * Адмін відповідає login = admin@admin.com && pass = admin
         */
        if ($email == 'admin@admin.com' && $password == 'admin') {
            $isAdmin = true;
        } else {
            $isAdmin = false;
            
            $sql = "SELECT * FROM ".self::table." WHERE email = :email AND password = :password";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":password", md5($password));
            $stmt->execute();

            $user = $stmt->fetch(\PDO::FETCH_ASSOC);
        }
        
        return ['isAdmin' => $isAdmin, 'user' => $user];
    }

    public function registration($data)
    {
        $sql = "INSERT INTO ".self::table."(fio, phone, email, password)
				VALUES (:fio, :phone, :email, :password)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":fio", $data['fio']);
        $stmt->bindValue(":phone", $data['phone']);
        $stmt->bindValue(":email", $data['email']);
        $stmt->bindValue(":password", md5($data['password']));

        return $stmt->execute();
    }

    public function logout()
    {
        unset($_SESSION['user']);
    }
}
