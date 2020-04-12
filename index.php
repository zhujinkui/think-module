<?php

header("Content-Type: Text/Html;Charset=UTF-8");
require "./vendor/autoload.php";

$obj = new think\Module();


echo '<pre/>';
print_r($obj);
exit;