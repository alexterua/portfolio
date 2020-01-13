<?php


namespace App;


/**
 * Class BaseModel
 * @package App
 */
abstract class BaseModel
{
    public const TABLE = '';

    public $id;

    /**
     * @return array
     */
    public static function getAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    /**
     * @param int $id
     * @return array
     */
    public static function getById(int $id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        return $db->query($sql, static::class, [':id' => $id]);
    }

    public function insert()
    {
        $fields = get_object_vars($this);
        $columns = [];
        $data = [];

        foreach ($fields as $name => $value) {
            if ($name == 'id') {
                continue;
            }
            $columns[] = $name;
            $data[':' . $name] = $value;
        }

        $db = new Db();
        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(', ', $columns) . ') VALUES (' . implode(', ', array_keys($data)) . ')';
        $db->execute($sql, $data);

        $this->id = $db->getLastId();
    }

    public function update()
    {
        $fields = get_object_vars($this);
        $data = [];
        $string = '';

        foreach ($fields as $name => $value) {
            if ($name == 'id') {
                continue;
            }
            $data[':' . $name] = $value;
            $string .= $name . ' = :' . $name . ', ';
        }
        $data[':id'] = $this->id;
        $string = trim($string, ', ');

        $db = new Db();
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . $string . ' WHERE id=:id';
        $db->execute($sql, $data);
    }

    public function save()
    {
        if ($this->id === null) {
            $this->insert();
        }
        $this->update();
    }

    public function delete()
    {
        $db = new Db();
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
        $db->execute($sql, [':id' => $this->id]);
    }
}