<?php
include __DIR__ . '/vendor/autoload.php';

use Pepe\Generator\RandomImgFactory;

$generator = RandomImgFactory::factory($_POST['random']);
$image = $generator->create($_POST['width'], $_POST['height']);

header('Content-type: image/png');
imagepng($image);
