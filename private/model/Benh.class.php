<?php
/**
 * Created by PhpStorm.
 * User: Hai Nguyen
 * Date: 4/10/2018
 * Time: 6:25 PM
 */

class Benh extends DbObject
{
    static protected $tableName = "benh";
    static protected $columns=["id","menhdeid","nguyennhan","dieutri","trieuchung","thoigianbenh"];

    public $id;
    public $menhdeid;
    public $tenbenh;
    public $nguyennhan;
    public $dieutri;
    public $trieuchung;
    public $thoigianbenh;


}