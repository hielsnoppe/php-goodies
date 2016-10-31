<?php

namespace NielsHoppe\Goodies\JsonSchema\Examples;

class ExampleDictionary implements \NielsHoppe\Goodies\JsonSchema\Types\JsonDictionary {

    use \NielsHoppe\Goodies\JsonSchema\Traits\AssociativeArrayTrait;

    protected static $properties = array(
        'foo' => array(
            'property' => 'foo',
            'type' => 'string'
        ),
        'bar' => array(
            'method' => 'getBar',
            'type' => 'number'
        )
    );

    protected $foo;
    protected $bar;

    public function __construct ($foo) {

        $this->foo = $foo;
    }

    public function getBar () {

        return 42;
    }
}
