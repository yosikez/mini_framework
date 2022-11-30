<?php

namespace Staditek\App\Model;

use Staditek\App\Core\Database;

class Model extends Database
{
    public function getAll(){
        $statement = self::$conn->prepare("SELECT * FROM account");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM account WHERE id=:id");
        $statement->execute(['id'=>$id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO accout(id, name, email, phone, created_at) VALUES (id=:id, name=:name, email=:email, phone=:phone, created_at=:created_at");
        return $statement->execute($data);

    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE account SET name=:name, email=:email, phone=:phone, updated_at=:updated_at WHERE id=:id");
        return $statement->execute(array_merge($data, ['id'=>$id]));
    }
}
