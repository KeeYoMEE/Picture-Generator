<?php

namespace Pepe\Generator;

class RandomImgColumnRandom implements RandomImgGeneratorInterface
{
    /**
     * @inheritdoc
     */
    public function create($width, $height)
    {
        //Setting picture Height and Width
        $image = imagecreatetruecolor($width, $height);

        //Columns all random
        //Collums
        for ($column = 1; $column <= $width; $column++) {
            //generating random color for columns
            $red = mt_rand(0, 255);
            $green = mt_rand(0, 255);
            $blue = mt_rand(0, 255);
            //Rows
            for ($row = 1; $row <= $height; $row++) {
                //Setting pixel color
                $colour = imagecolorallocate($image, $red, $green, $blue);
                imagesetpixel($image, $column - 1, $row - 1, $colour);
            }
        }
        return $image;
    }
}