<?php

declare (strict_types = 1);

namespace Site\Utils;

class PageUtils
{
    public static function getPageTitle(string $page): string
    {
        foreach (PAGES_TITLES as $title) {
            if ($title['file'] === $page) {
                return $title['title'] . ' - ' . SITE_SUFFIX;
            }
        }

        return "Página Inicial - " . SITE_SUFFIX;
    }
}
