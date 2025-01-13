<?php

declare (strict_types = 1);

namespace Site\Utils;

class ImageUtils
{
    public static function renderImageContainer(
        string $containerClass = '',
        string $imageSrc,
        string $imageAlt,
        string $imageCaption = ''
    ): string {
        return
            "<div class='" . $containerClass . "'>"
            . "<img src='" . $imageSrc . "' "
            . "alt='" . $imageAlt . "' "
            . "title='" . $imageAlt . "' />"
            . "<span>" . $imageCaption . "</span>"
            . "</div>";
    }
}
