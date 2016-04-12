<?php

namespace Pepe\Generator;

class RandomImgColumnSimilar implements RandomImgGeneratorInterface
{
    /**
     * @inheritdoc
     */
    public function create($width, $height)
    {
        //Setting picture Height and Width
        $image = imagecreatetruecolor($width, $height);

        //Columns random but similar
        $red = mt_rand(0, 255);
        $green = mt_rand(0, 255);
        $blue = mt_rand(0, 255);

        //Choosing main color = Red main
        if ($red >= $blue && $red >= $green) {
            //Columns
            for ($column = 1; $column <= $width; $column++) {
                //Choosing if + or -
                $difference = mt_rand(0, 10);

                if ($red <= 30) {
                    $Operator = 1;
                } elseif ($red >= 245) {
                    $Operator = 0;
                } else {
                    $Operator = mt_rand(0, 1);
                }

                //Changing color
                ($Operator == 1) ? $red = $red + $difference : $red = $red - $difference;
                //Rows
                for ($row = 1; $row <= $height; $row++) {

                    //Setting pixel color
                    $colour = imagecolorallocate($image, $red, $green, $blue);
                    imagesetpixel($image, $column - 1, $row - 1, $colour);
                }
            }

            //Blue main
        } elseif ($blue >= $red && $blue >= $green) {
            //Columns
            for ($column = 1; $column <= $width; $column++) {
                //Choosing if + or -
                $difference = mt_rand(0, 10);

                if ($blue <= 30) {
                    $Operator = 1;
                } elseif ($blue >= 245) {
                    $Operator = 0;
                } else {
                    $Operator = mt_rand(0, 1);
                }

                //Changing color
                ($Operator == 1) ? $blue = $blue + $difference : $blue = $blue - $difference;
                //Rows
                for ($row = 1; $row <= $height; $row++) {

                    //Setting pixel color
                    $colour = imagecolorallocate($image, $red, $green, $blue);
                    imagesetpixel($image, $column - 1, $row - 1, $colour);
                }
            }

            //Green main
        } else {
            //Columns
            for ($column = 1; $column <= $width; $column++) {
                //Choosing if + or -
                $difference = mt_rand(0, 10);

                if ($green <= 30) {
                    $Operator = 1;
                } elseif ($green >= 245) {
                    $Operator = 0;
                } else {
                    $Operator = mt_rand(0, 1);
                }

                //Changing color
                ($Operator == 1) ? $green = $green + $difference : $green = $green - $difference;
                //Rows
                for ($row = 1; $row <= $height; $row++) {

                    //Setting pixel color
                    $colour = imagecolorallocate($image, $red, $green, $blue);
                    imagesetpixel($image, $column - 1, $row - 1, $colour);
                }
            }
        }
        return $image;
    }
}