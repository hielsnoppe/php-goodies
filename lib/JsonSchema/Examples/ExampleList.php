<?php

namespace NielsHoppe\JSON\Examples;

class ExampleList implements \NielsHoppe\JSON\Types\JsonArray {

    use \NielsHoppe\JSON\Traits\ListTrait;

    public function __construct ($items) {

        $this->items = $items;
    }
}
