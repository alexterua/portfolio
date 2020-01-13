<?php


namespace App\Models;


use App\Db;

/**
 * Class Contact
 * @package App\Models
 */
class Contact
{
    private $data = [];
    private $dbh;

    public function __construct()
    {
        $this->dbh = new Db();
    }

    public function add(array $data)
    {
        $sql = 'INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)';
        $this->data = $this->dbh->query($sql, $data);
        return $this->data;
    }
}