<?php

namespace Yosmy\Image;

use Exception;

/**
 * @di\service()
 */
class ResolveSize
{
    /**
     * @param string $file
     *
     * @return Size
     *
     * @throws UnresolvableSizeException
     */
    public function resolve(
        string $file
    ): Size {
        try {
            $info = getimagesize($file);
        } catch (Exception $e) {
            throw new UnresolvableSizeException();
        }

        if (!$info) {
            throw new UnresolvableSizeException();
        }

        list($width, $height, $type) = $info;

        return new Size(
            $width,
            $height,
            $type
        );
    }
}
