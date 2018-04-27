<?php
/**
 * Created by PhpStorm.
 * User: Hai Nguyen
 * Date: 4/10/2018
 * Time: 6:25 PM
 */

class DieuKien extends DbObject
{
    static protected $tableName = "dieukien";
    static protected $columns=["id"];

    public $id;
    public $listMenhde = [];

    public function load_list_menhde(){
        $sql = "SELECT menhde.* FROM dieukien_menhde, menhde WHERE dieukien_menhde.menhdeid = menhde.id AND dieukienid = '" . $this->id . "'; ";
        $this->listMenhde = MenhDe::find_by_sql($sql);
    }
    static public function them_dieu_kien(){
        $sql = "INSERT INTO dieukien VALUE ()";
        $result = self::$database->query($sql);
        if ($result) return self::$database->insert_id;
        return $result;
    }
}