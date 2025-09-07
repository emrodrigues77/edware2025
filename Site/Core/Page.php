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

        include PAGES_PATH . 'nav.php';

        echo "<div id='main'>";
        include PAGES_PATH . $this->getContentFile() . '.php';
        echo "</div>";

        include PAGES_PATH . 'footer.php';
        echo $this->closeHTML();
    }

    private function openHTML(): string
    {
        return "<html lang='en' >"
        . "<head>"
        . "<meta charset='UTF-8'>"
        . "<title>" . PageUtils::getPageTitle($this->content) . "</title>"
            . "<meta name='viewport' content='width=device-width, initial-scale=1.0'>"
            . "<link rel='stylesheet' href='" . CSS_PATH . "normalize.css' />"
            . "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' "
            . "integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous' />"
            . "<link rel='stylesheet' href='" . CSS_PATH . "styles.min.css' />"
            . "<meta name='description' content='Página do autor Eduardo Magela Rodrigues, escritor de ficção científica.'>"
            . "<meta name='keywords' content='Eduardo Magela Rodrigues, escritor, ficção científica, livros, A Flor Negra, O Presidente e Outras Histórias, Estação Éden, V4T3R, literatura, contos, romances, autor brasileiro'>"
            . "</head>"
            . "<body>";
    }

    private function closeHTML(): string
    {
        return "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' "
            . "integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>"
            . "</body>"
            . "</html>";
    }

    private function getContentFile(): string
    {
        return \file_exists(PAGES_PATH . $this->content . '.php') ? $this->content : 'home';
    }
}
