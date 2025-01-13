<?php

spl_autoload_register(function ($class) {
    require_once (str_replace('\\', '/', $class . '.php'));
});

define('SITE_SUFFIX', 'Eduardo Magela Rodrigues');
define('SITE_PATH', './Site/');
define('ASSETS_PATH', SITE_PATH . '../../assets/');
define('CSS_PATH', ASSETS_PATH . 'css/');
define('IMAGES_PATH', ASSETS_PATH . 'img/');
define('COVERS_PATH', IMAGES_PATH . 'covers/');
define('PAGES_PATH', SITE_PATH . 'Pages/');
define('PAGES_TITLES',
    [
        ["file" => "home", "title" => "Página Inicial"],
        ["file" => "flor", "title" => "A Flor Negra"],
    ]);
