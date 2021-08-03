<?php

namespace Yosmy\Image;

class Size
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var string
     */
    private $type;

    /**
     * @param int    $width
     * @param int    $height
     * @param string $type
     */
    public function __construct(
        int $width,
        int $height,
        string $type
    ) {
        $this->width = $width;
        $this->height = $height;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
