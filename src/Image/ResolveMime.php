<?php

namespace Yosmy\Image;

/**
 * @di\service()
 */
class ResolveMime
{
    /**
     * @param string $type
     *
     * @return string
     */
    public function resolve(
        string $type
    ): string {
        return image_type_to_mime_type($type);
    }
}
