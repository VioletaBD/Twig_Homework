<?php

require_once __DIR__ . '/../config/twig.php';

echo $twig->render('products.html.twig');

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

?>