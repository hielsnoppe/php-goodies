<?php

namespace NielsHoppe\Goodies\JsonSchema\Examples;

class ExampleNumber implements \NielsHoppe\Goodies\JsonSchema\Types\JsonNumeric {

    use \NielsHoppe\Goodies\JsonSchema\Traits\NumberTrait;

    public function __construct ($value) {

        $this->set($value);
    }
}
