<?php
chdir (dirname(__DIR__));
require 'vendor/autoload.php';
//require __DIR__.'/../module/MiniModule/src/IndexController.php';
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
