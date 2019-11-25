<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();
/* Accès à la base de données */

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'tp1_maintenance';


/* Description Site web */

$defaultTitle = 'Gestion de commande';
$defaultFooter = 'Gestion de commande'.date('Y');

?>
