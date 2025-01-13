<?php
declare (strict_types = 1);

namespace Site\Core;

use Site\Utils\PageUtils;

class Page
{
    public function __construct(
        private string $content
    ) {
    }

    public function render(): void
    {
        echo $this->openHTML();

        include PAGES_PATH . 'header.php';
        include PAGES_PATH . 'nav.php';

        echo "<div id='main'>";
        include PAGES_PATH . $this->getContentFile() . '.php';
        echo "</div>";

        include PAGES_PATH . 'social.php';
        include PAGES_PATH . 'nav.php';
        include PAGES_PATH . 'footer.php';
        echo $this->closeHTML();
    }

    private function openHTML(): string
    {
        return
        "<html lang='en' >"
        . "<head>"
        . "<meta charset='UTF-8'>"
        . "<title>" . PageUtils::getPageTitle($this->content) . "</title>"
            . "<meta name='viewport' content='width=device-width, initial-scale=1.0'>"
            . "<link rel='stylesheet' href='" . CSS_PATH . "normalize.css' />"
            . "<link rel='stylesheet' href='" . CSS_PATH . "styles.min.css' />"
            . "</head>"
            . "<body>";
    }

    private function closeHTML(): string
    {
        return
            "</body>"
            . "</html>";
    }

    private function getContentFile(): string
    {
        return \file_exists(PAGES_PATH . $this->content . '.php') ? $this->content : 'home';
    }
}
