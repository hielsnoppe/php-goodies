<?php

namespace NielsHoppe\Goodies;

use \NielsHoppe\Goodies\CSVFileIterator;
use \NielsHoppe\Goodies\CallbackMapIterator;

class MainTest extends \PHPUnit_Framework_TestCase {

    /**
     * @dataProvider dataProvider
     */

    public function testMain ($first, $second) {

        var_dump(func_get_args());

        $this->assertEquals(true, true);
    }

    public function dataProvider () {

        $csvIt = new CSVFileIterator('testdata.csv');

        return new CallbackMapIterator($csvIt, function ($array) {

            return array($array[0], $array[2]);
        });
    }
}
