<?php define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/products_model.php");
require_once(__ROOT__ . "controller/product_controller.php");
require_once(__ROOT__ . "view/product_view.php");

$model = new Products();
$controller = new ProductController($model);
$process = $controller->insertPr($_GET["code"], $_GET["prname"], $_GET["prdesc"], $_GET["pic"] ,$_GET["origin"]);
header("Location:product_public.php");
?>