<?php

ob_start(); // turn on output buffering


require_once('database_functions.php');



foreach(glob('classes/*.class.php') as $file) {
    require_once($file);
}

// Autoload class definitions
function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
        include('model/' . $class . '.class.php');
    }
}
spl_autoload_register('my_autoload');

$database = db_connect();
DbObject::set_database($database);

$luat_array = Luat::find_all();

foreach ($luat_array as $luat) {
    $dieukien_obj = DieuKien::find_by_id($luat->dieukienid);
    $dieukien_obj->load_list_menhde();
    $luat->set_dieukien_obj($dieukien_obj);
}


?>
