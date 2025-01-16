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
define('PROFILE_PATH', IMAGES_PATH . 'profile/');
define('ICONS_PATH', IMAGES_PATH . 'icons/');
define('LOGOS_PATH', IMAGES_PATH . 'logos/');
define('DOCS_PATH', ASSETS_PATH . 'docs/');
define('PAGES_PATH', SITE_PATH . 'Pages/');
define('PAGES_TITLES',
    [
        ["file" => "home", "title" => "Página Inicial"],
        ["file" => "flor", "title" => "A Flor Negra"],
        ["file" => "presidente", "title" => "O Presidente e Outras Histórias"],
        ["file" => "eden", "title" => "Estação Éden"],
        ["file" => "v4t3r", "title" => "V4T3R"],
        ["file" => "contato", "title" => "Contato"],
    ]);
define('SOCIAL_LINKS',
    [
        ["title" => "Instagram", "url" => "https://www.instagram.com/durodrigues77/", "icon" => "instagram"],
        ["title" => "Linkedin", "url" => "https://www.linkedin.com/in/durodrigues77/", "icon" => "linkedin"],
        ["title" => "Twitter", "url" => "https://twitter.com/durodrigues77", "icon" => "twitter"],
    ]
);