<?php
/**
 * Created by PhpStorm.
 * User: Hai Nguyen
 * Date: 4/10/2018
 * Time: 6:24 PM
 */

class Dieukien_Menhde extends DbObject
{
    static protected $tableName = "dieukien_menhde";
    static protected $columns=["id","menhdeid","dieukienid"];

    public $id;
    public $menhdeid;
    public $dieukienid;

    public function __construct($dieukienid,$menhdeid)
    {
        $this->dieukienid = $dieukienid;
        $this->menhdeid = $menhdeid;
    }
}