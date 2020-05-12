<?php define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/storages_model.php");
require_once(__ROOT__ . "controller/storage_controller.php");
require_once(__ROOT__ . "view/storage_view.php");

$model = new Storages();
$controller = new StorageController($model);

$controller->editSt();
?>