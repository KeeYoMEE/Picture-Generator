<?php

namespace Pepe\Generator;

interface RandomImgGeneratorInterface
{
    /**
     * @param int $width
     * @param int $height
     * @return resource
     */
    public function create($width, $height);
}
