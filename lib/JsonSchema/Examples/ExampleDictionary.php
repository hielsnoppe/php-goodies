<?php

namespace NielsHoppe\Goodies\JsonSchema\Examples;

class ExampleDictionary implements \NielsHoppe\Goodies\JsonSchema\Types\JsonDictionary {

    use \NielsHoppe\Goodies\JsonSchema\Traits\DictionaryTrait;

    public function __construct ($items) {

        $this->items = $items;
    }
}
