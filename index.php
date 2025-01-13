<?php

require_once 'app.php';

use Site\Core\Controller;

$request = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

Controller::handleRequest($request);
