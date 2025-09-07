<?php

declare (strict_types = 1);

namespace Site\Core;

class Controller
{
    public static function handleRequest(string $request): string
    {
        if (\file_exists(PAGES_PATH . $request . '.php')) {
            $page = new Page($request);
        } else {
            $page = new Page('v4t3r');
        }

        $page->render();
    }
}
