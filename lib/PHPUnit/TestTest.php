<?php

namespace Nl2Go\Templates\V3_0;

class TestTest extends \PHPUnit_Framework_TestCase {

    use \NielsHoppe\Goodies\PHPUnit\TestCaseDataProviderTrait;

    /**
     * @dataProvider yamlDataProvider
     */

    public function testTest ($data) {

        var_dump($data);
        $this->assertTrue(true);
    }
}
