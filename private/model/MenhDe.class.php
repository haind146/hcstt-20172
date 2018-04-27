<?php
/**
 * Created by PhpStorm.
 * User: Hai Nguyen
 * Date: 4/10/2018
 * Time: 6:26 PM
 */
require_once ("DbObject.class.php");
class MenhDe extends DbObject
{
    static protected $tableName = "menhde";
    static protected $columns=["id","noidung","vitri","loai"];


    public $dochinhxac;
    public $id;
    public $noidung;
    public $vitri;
    public $loai;

    public function __construct($arg = [])
    {
        $this->noidung = $arg["noidung"] ?? "";
        $this->vitri = $arg["vitri"] ?? "";
        $this->loai = $arg["loai"] ?? "";
    }


    static public function find_by_keyword($keyword){
        $sql = "SELECT * FROM menhde WHERE noidung LIKE '%". $keyword . "%' LIMIT 6;";
        return self::find_by_sql($sql);
    }

    static public function find_by_noidung($noidung){
        $sql = "SELECT * FROM menhde WHERE noidung = '" . $noidung ."';";
        $obj_array = self::find_by_sql($sql);
        if(!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }
}