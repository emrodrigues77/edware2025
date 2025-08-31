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

    public static function generateContactLinks(): string
    {
        $links = '';

        foreach (SOCIAL_LINKS as $link) {
            $url = $link['type'] === 'email' ? 'mailto:' . $link['url'] : $link['url'];
            $links .= "<p>"
                . "<strong>" . $link['title'] . ": </strong>"
                . "<a target='_blank' href='" . $url . "'>"
                . $link['url']
                . "</a>"
                . "</p>";
        }

        return $links;
    }

    public static function generateSocialLinks(): string
    {
        $links = '<p>';

        foreach (SOCIAL_LINKS as $link) {
            $url = $link['type'] === 'email' ? 'mailto:' . $link['url'] : $link['url'];
            $links .= "<a href='" . $url . "'>"
                . "<img src='" . ICONS_PATH . $link['icon'] . ".png' alt='" . $link['title'] . "' "
                . "title='" . $link['title'] . "'/></a>&nbsp;";
        }

        $links .= '</p>';

        return $links;
    }
}
