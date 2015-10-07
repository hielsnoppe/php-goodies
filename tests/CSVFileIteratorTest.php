<?php

namespace NielsHoppe\Goodies;

use \NielsHoppe\Goodies\CSVFileIterator;

class CSVFileIteratorTest extends \PHPUnit_Framework_TestCase {

    /**
     * @dataProvider dataProvider
     */

    public function testMain ($id, $value) {

        switch (intval($id)) {

        case 1:

            $this->assertEquals(array("1", "font-size: 12px; color: #ff0000"), func_get_args());

            break;

        case 2:

            $this->assertEquals(array("2", "font-familiy: 'Open Sans', sans-serif"), func_get_args());

            break;
        }
    }

    public function dataProvider () {

        return new CSVFileIterator('data/testdata.csv');
    }
}
