<?php
chdir (dirname(__DIR__));
require 'vendor/autoload.php';
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}
//require __DIR__.'/../module/MiniModule/src/IndexController.php';
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
