<?php
require_once('../Image.php');

use Gregwar\Image\Image;

Image::open('img/mona.jpg')
    ->cropResize(500, 150)
    ->save('out.jpg');
