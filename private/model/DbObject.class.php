<?php
/**
 * Created by PhpStorm.
 * User: Hai Nguyen
 * Date: 4/10/2018
 * Time: 6:19 PM
 */

class DbObject
{
    static protected $database;
    static protected $tableName = "";
    static protected $columns=[];

    protected $id;

    static public function find_all() {
        $sql = "SELECT * FROM " . static::$tableName;
        return static::find_by_sql($sql);
    }

    static public function find_by_sql($sql) {
        $result = self::$database->query($sql);
        if(!$result) {
            exit("Database query failed.");
        }

        // results into objects
        $object_array = [];
        while($record = $result->fetch_assoc()) {
            $object_array[] = static::instantiate($record);
        }

        $result->free();

        return $object_array;
    }

    static public function find_by_id($id) {
        $sql = "SELECT * FROM " . static::$tableName . " ";
        $sql .= "WHERE id='" . self::$database->escape_string($id) . "'";
        $obj_array = static::find_by_sql($sql);
        if(!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }


    // return list attributes as array (key=>value)
    public function attributes(){
        $attributes = [];
        foreach (static::$columns as $column){
            if ($column == 'id') {continue;}
            $attributes[$column] = $this->$column;
        }
        return $attributes;
    }


    static function set_database($database){
        self::$database = $database;
    }

    // escape string to prevent  sql-injection attack
    public function sanitized_attributes(){
        $sanitized = [];
        foreach ($this->attributes() as $key => $value){
            $sanitized[$key] = self::$database->escape_string($value);
        }
        return $sanitized;
    }

    function create(){

        $attributes = $this->sanitized_attributes();
        $sql = "INSERT INTO " . static::$tableName . " (";
        $sql .= join(', ', array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes));
        $sql .= "')";
        $result = self::$database->query($sql);
        if($result) {
            $this->id = self::$database->insert_id;
        }
        return $result;
    }


    public function delete() {
        $sql = "DELETE FROM " . static::$table_name . " ";
        $sql .= "WHERE id='" . self::$database->escape_string($this->id) . "' ";
        $sql .= "LIMIT 1";
        $result = self::$database->query($sql);
        return $result;

    }


    static protected function instantiate($record) {
        $object = new static;
        // Could manually assign values to properties
        // but automatically assignment is easier and re-usable
        foreach($record as $property => $value) {
            if(property_exists($object, $property)) {
                $object->$property = $value;
            }
        }
        return $object;
    }
}