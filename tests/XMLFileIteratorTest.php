<?php

namespace NielsHoppe\Goodies;

/**
 * Shamelessly copied from
 * @see http://www.testically.org/2011/03/08/simply-iterate-over-xml-with-plain-php-using-little-memory-and-cpu/
 */

use \NielsHoppe\Goodies\XMLFileIterator;

class XMLFileIteratorTest extends \PHPUnit_Framework_TestCase {

    public function testSomething () {

        $mapping = array(
            'v1' => 'id',
            'v2' => 'name',
            'v3' => 'degree',
        );

        $parser = new XMLFileIterator('item', $mapping);

        $parser->loadXmlFile('testdata.xml');

        while ($parser->valid()) {

            $data = $parser->current();
            // do something with the data ..
            $parser->next();
        }
    }
}
