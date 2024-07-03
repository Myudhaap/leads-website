<?php

use leadsWeb\controllers\LeadController;

require_once "src/config/database.php";
require_once "src/controllers/LeadController.php";

$leadController = new LeadController();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'index':
        $leadController->index();
        break;
    case 'create':
        $leadController->create();
        break;
    default:
        $leadController->index();
        break;
}


