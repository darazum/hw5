<?php
// include composer autoload
require '../vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('girl.jpg');

$img->resize(200, null, function (\Intervention\Image\Constraint $constraint) {
    $constraint->aspectRatio();
});

$img->text('Watermark', $img->getWidth() - 10, $img->getHeight() - 10, function (\Intervention\Image\AbstractFont $font) {
    $font->size(24);
    $font->file('verdana.ttf');
    $font->color([2555, 255, 255, 0.3]);
    $font->align('right');
    $font->valign('bottom');
});

$img->save('test.jpg');

echo $img->response('jpg');