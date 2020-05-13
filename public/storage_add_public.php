<?php define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/storages_model.php");
require_once(__ROOT__ . "controller/storage_controller.php");
require_once(__ROOT__ . "view/storage_view.php");

$model = new Storages();
$controller = new StorageController($model);
$process = $controller->insertSt($_GET["prid"], $_GET["prname"], $_GET["prq"], $_GET["prd"] ,$_GET["prinq"], $_GET["proutq"]);
$Message = urlencode("$process");
header("Location:storage_public.php?Message=".$Message);
?>