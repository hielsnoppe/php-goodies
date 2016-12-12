<?php

namespace NielsHoppe\JSON\Examples;

class ExampleDictionary implements \NielsHoppe\JSON\Types\JsonDictionary {

    use \NielsHoppe\JSON\Traits\DictionaryTrait;

    public function __construct ($items) {

        $this->items = $items;
    }
}
