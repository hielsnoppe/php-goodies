<?php

namespace NielsHoppe\Goodies\JSON;

use \Doctrine\Common\Annotations\AnnotationReader;

use \NielsHoppe\Goodies\JSON\Annotations\Property;

abstract class JsonSerializable implements \JsonSerializable {

    static $schema;

    public function __construct () {}

    public function jsonSerialize () {
    }

    public static function getJsonSchema () {

        $reader = new AnnotationReader();
        $schema = array();

        $reflection = new \ReflectionClass(static::class);

        foreach ($reflection->getProperties() as $property) {

            $annotations = $reader->getPropertyAnnotations($property);

            foreach ($annotations as $annotation) {

                if ($annotation instanceof Property) {

                    var_dump($annotation);
                }
                else {

                    var_dump($annotation);
                }
            }
        }
    }
}

/*
foreach ($classAnnotations AS $annot) {

    echo 'annotation: ';

    if ($annot instanceof \NielsHoppe\Goodies\JSON\Annotations\Example) {

        echo 'TEST';
        //echo $annot->bar; // prints "foo";
    }
}
*/
