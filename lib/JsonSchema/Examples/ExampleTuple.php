<?php

namespace NielsHoppe\JSON\Examples;

class ExampleTuple implements NielsHoppe\JSON\Types\AssociativeArray {

    use \NielsHoppe\JSON\Traits\AssociativeArrayTrait;

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
