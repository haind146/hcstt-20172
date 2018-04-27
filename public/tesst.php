<?php
/**
 * Created by PhpStorm.
 * User: Hai Nguyen
 * Date: 4/10/2018
 * Time: 11:17 PM
 */
require_once ('../private/initialize.php');
$luat_arr = Luat::find_all();
foreach ($luat_arr as $luat) {
    echo $luat->menhdeid;
}

echo DieuKien::them_dieu_kien();