<?php

namespace NielsHoppe\Goodies\JSON;

require('vendor/autoload.php');

use \Doctrine\Common\Annotations\AnnotationRegistry;

AnnotationRegistry::registerFile(__DIR__ . '/Annotations/autoload.php');
#AnnotationRegistry::registerAutoloadNamespace("NielsHoppe\Goodies\JSON", __DIR__);

$main = new Main('Fridolin');

print_r($main->getJsonSchema());
