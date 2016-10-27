<?php

namespace NielsHoppe\Goodies\PHPUnit;

trait AdditionalAssertsTrait {

    public function assertEqualItems ($expected, $actual, $message = '') {

        $this->assertEquals(array_diff($expected, $actual), array(), 'Too few items');
        $this->assertEquals(array(), array_diff($actual, $expected), 'Too many items');
    }
}
