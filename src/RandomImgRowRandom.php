<?php

namespace Pepe\Generator;

class RandomImgRowRandom implements RandomImgGeneratorInterface
{
    /**
     * @inheritdoc
     */
    public function create($width, $height)
    {
        //Setting picture Height and Width
        $image = imagecreatetruecolor($width, $height);
        //Rows all random
        //Rows
        for ($row = 1; $row <= $height; $row++) {
            //generating random color for collums
            $red = mt_rand(0, 255);
            $green = mt_rand(0, 255);
            $blue = mt_rand(0, 255);
            //Collums
            for ($column = 1; $column <= $width; $column++) {
                //Setting pixel color
                $colour = imagecolorallocate($image, $red, $green, $blue);
                imagesetpixel($image, $column - 1, $row - 1, $colour);
            }
        }
        return $image;
    }
}