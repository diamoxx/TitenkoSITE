<?php

namespace Models;

class Abonement extends Model
{
    public const table = 'abonements';

    public const TYPE_ABONEMENTS = [
        1  => [
            'price' => 100,
            'title' => 'Разове відвідування - 100 грн'
        ],
        2  => [
            'price' => 80,
            'title' => 'Разове відвідування для дітей віком до 11 років - 80 грн'
        ],
        3  => [
            'price' => 650,
            'title' => '8 відвідувань - 650 грн'
        ],
        4  => [
            'price' => 860,
            'title' => '12 відвідувань - 860 грн'
        ],
        5  => [
            'price' => 3200,
            'title' => '36* відвідувань - 3200 грн'
        ],
        6  => [
            'price' => 900,
            'title' => '1 місяць **необмежений тренажерного залу - 900 грн'
        ],
        7  => [
            'price' => 7200,
            'title' => '2 місяців необмежений тренажерного залу - 7200 грн'
        ],
    ];

    public function create($data) 
    {
        $sql = "INSERT INTO ".self::table."(user_id, type, price)
				VALUES (:user_id, :type, :price)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":user_id", $data['user_id']);
        $stmt->bindValue(":type", self::TYPE_ABONEMENTS[$data['type']]['title']);
        $stmt->bindValue(":price", self::TYPE_ABONEMENTS[$data['type']]['price']);

        return $stmt->execute();
    }

    public function getAbonements()
    {
        $sql = "SELECT u.fio as user_fio, u.phone, u.email, a.id, a.type, a.price, a.created_at FROM  ".self::table." as a 
             JOIN ".User::table." as u ON u.id = a.user_id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getAbonementsByUserId($id)
    {
        $sql = "SELECT u.phone, a.id, a.type, a.price, a.created_at FROM  ".self::table." as a 
             JOIN ".User::table." as u ON u.id = a.user_id WHERE user_id = $id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM ".self::table." WHERE id = $id";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute();
    }
}