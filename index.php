<?php

require_once "libs/Smarty.class.php";
require_once "functions.php";

$smarty = new Smarty();
$smarty->setTemplateDir('templates');




$action = $_GET['action'] ?? 'main';
switch ($action) {
    case "fillTables":
        fillTables();
        break;
    case "flushTables";
        flushTables();
        break;
    case "main":
        tablesDisplay();
        break;

}
