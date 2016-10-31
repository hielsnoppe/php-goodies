<?php

namespace NielsHoppe\Goodies\JsonSchema\Examples;

class ExampleList implements \NielsHoppe\Goodies\JsonSchema\Types\JsonArray {

    use \NielsHoppe\Goodies\JsonSchema\Traits\ListTrait;

    public function __construct ($items) {

        $this->items = $items;
    }
}
