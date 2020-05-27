<?php

require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/storage_model.php");
require_once(__ROOT__ . "controller/controller.php");
require_once(__ROOT__ . "controller/storage_controller.php");
require_once(__ROOT__ . "view/view.php");
require_once(__ROOT__ . "view/storage_view.php");


interface Strategy
{
    public function generate()
    {

    }
}


?>
