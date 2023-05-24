<?php
use App\Controllers\ControllerUpdateP;
use App\Core\Router;

$router ->post('admin/create', 'ControllerUpdateP@create');
$router ->post('admin', 'ControllerUpdateP@edit');

?>
