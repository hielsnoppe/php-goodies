<?php

namespace NielsHoppe\Goodies;

use \NielsHoppe\Goodies\JsonSchema\Examples\ExampleObject;

class ExampleObjectTest extends \PHPUnit_Framework_TestCase {

    public function testMain () {

        $obj = new ExampleObject(null);

        $actual = $obj->jsonSerialize();
        $expected = array(
            'name' => 'Example', // string
            'answer' => 42, // integer
            'pi' => 3.1415, // number
            'isExample' => true, // bool,
            'ducks' => array(
                'Huey', 'Dewey', 'Louie'
            )
        );

        $this->assertEquals($expected, $actual, '');
    }
}
