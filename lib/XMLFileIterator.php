<?php

namespace NielsHoppe\Goodies;

/**
 * Shamelessly copied from
 * @see http://www.testically.org/2011/03/08/simply-iterate-over-xml-with-plain-php-using-little-memory-and-cpu/
 */

use \NielsHoppe\Goodies\XMLReader;

class XMLFileIterator implements \Iterator {

    protected $xml;
    protected $key;
    protected $mapping;
    protected $reader;
    protected $current = false;
    protected $next = false;

    public function __construct ($key, array $mapping) {

        $this->key = $key;
        $this->mapping = $mapping;
        $this->reader = new XMLReader();
    }

    public function __destruct () {

        $this->reader->close();
    }

    public function loadXmlFile ($xml) {

        $this->xml = $xml;
        $this->load();
    }

    private function load () {

        $this->reader->open($this->xml, null, XMLReader::VALIDATE | XMLReader::SUBST_ENTITIES);
    }

    public function current () {

        if (false === $this->current) {

            $this->current = $this->readItem();
        }

        return $this->current;
    }

    public function key () {

        return $this->count;
    }

    public function next () {

        $this->current = $this->readItem();
    }

    public function rewind () {

        $this->load();
    }

    public function valid () {

        return (false !== $this->current());
    }

    protected function readItem () {

        if (false !== $this->next) {

            $next = $this->next;
            $this->next = false;
            return $next;
        }

        $data = array();

        while ($this->reader->read()) {

            if ($this->key == $this->reader->name && $this->reader->nodeType == XMLReader::ELEMENT) {

                while ($this->reader->read()) {

                    if($this->key == $this->reader->name && $this->reader->nodeType == XMLReader::END_ELEMENT) {

                        return $data;
                    }
                    else if($this->reader->nodeType == XMLReader::ELEMENT) {

                        $data[$this->mapping[$this->reader->name]] = $this->reader->readInnerXML();
                    }
                }
            }
        }

        return false;
    }
}
