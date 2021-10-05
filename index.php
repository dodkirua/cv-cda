<?php
ini_set("display_errors", E_ALL);

use Controller\Classes\IndexController;
use Controller\Classes\MailController;

require_once $_SERVER['DOCUMENT_ROOT'] . "/import.php";

if (isset($_GET['ctrl'])){
    switch ($_GET['ctrl']) {
        case 'mail' :
            MailController::display();
    }
}
else {
    IndexController::display();
}