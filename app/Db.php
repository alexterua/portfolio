<?php


namespace App;


use PDO;

class Db
{
    private $dbh;

    public function __construct()
    {
        $config = Config::getConfig();
        $this->dbh = new PDO($config->data['DB_CONNECTION'] .
            ':host=' . $config->data['DB_HOST'] .
            ';dbname=' . $config->data['DB_DATABASE'],
            $config->data['DB_USERNAME'],
            $config->data['DB_PASSWORD']);
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function query(string $sql, string $class, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);   // [':id' => $id]
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}