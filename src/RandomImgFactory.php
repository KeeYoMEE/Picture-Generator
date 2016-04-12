<?php

namespace Pepe\Generator;

class RandomImgFactory
{
    /**
     * @param  string $type
     * @return RandomImgGeneratorInterface
     * @throws [Exception] [Invalid parameter]
     */
    public static function factory($type)
    {
        switch ($type) {
            case 1:
                $generator = new RandomImgAllRandom();
                break;

            case 2:
                $generator = new RandomImgColumnRandom();
                break;

            case 3:
                $generator = new RandomImgColumnSimilar();
                break;

            case 4:
                $generator = new RandomImgRowRandom();
                break;

            case 5:
                $generator = new RandomImgRowSimilar();
                break;
            default:
                throw new Exception('Invalid parameter');
        }

        return $generator;
    }
}