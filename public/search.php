<?php
if (!isset($_SESSION)) {
    session_start();
}
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/company_model.php");
require_once(__ROOT__ . "model/companies_model.php");
require_once(__ROOT__ . "controller/company_controller.php");
require_once(__ROOT__ . "view/companies_view.php");
require_once(__ROOT__ . "view/company_view.php");




$model = new Companies();
$controller = new CompanyController($model);
$view = new CompaniesView($controller, $model);
echo $view->searchOutput();
