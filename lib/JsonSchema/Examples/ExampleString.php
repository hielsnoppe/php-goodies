<?php

namespace NielsHoppe\Goodies\JsonSchema\Examples;

class ExampleString implements \NielsHoppe\Goodies\JsonSchema\Types\JsonString {

    use \NielsHoppe\Goodies\JsonSchema\Traits\StringTrait;

    public function __construct ($value) {

        $this->set($value);
    }
}
