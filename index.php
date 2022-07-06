<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
const VG_ACCESS = true;

header('Content-Type:text/html;charset=utf-8');
session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';

function loadClass($className) {
    $className = str_replace('\\', '/', $className);
    include $className . '.php';
}

spl_autoload_register('loadClass');

(new \n2\B());