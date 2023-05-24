<?php
use App\Controllers\ControllerUpdateP;
use App\Core\Router;

$router ->post('admin', 'ControllerUpdateP@create');
$router ->post('admin', 'ControllerUpdateP@edit');

?>
