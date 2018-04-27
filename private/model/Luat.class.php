<?php
/**
 * Created by PhpStorm.
 * User: Hai Nguyen
 * Date: 4/10/2018
 * Time: 6:25 PM
 */
require_once ("DbObject.class.php");
class Luat extends DbObject
{
    static protected $tableName = "luat";
    static protected $columns=["id","dieukienid","menhdeid","dochinhxac"];

    public $id;
    public $menhdeid;
    public $dieukienid;
    public $dochinhxac;
    public $dieukien_obj;
    public $menhdekq_obj;


    public function __construct($dieukienid = "",$menhdeid = "")
    {
        $this->dieukienid = $dieukienid;
        $this->menhdeid = $menhdeid;
        $this->dochinhxac = 1;
    }

    function load_dieukien(){
        $this->dieukien_obj = DieuKien::find_by_id($this->dieukienid);
        return DieuKien::find_by_id();
    }
    public function set_dieukien_obj(DieuKien $dieukien_obj){
        $this->dieukien_obj = $dieukien_obj;
    }


    public function printLuat(){
        $str="";
        foreach ($this->dieukien_obj->listMenhde as $menhde){
            $str=$str.strval($menhde->id)."&";
        }
        $str=$str."=>".strval($this->menhdekq_obj->id);
        echo $str;
    }

}
