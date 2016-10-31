<?php

namespace NielsHoppe\Goodies\JsonSchema\Examples;

class ExampleInteger implements \NielsHoppe\Goodies\JsonSchema\Types\JsonInteger {

    use \NielsHoppe\Goodies\JsonSchema\Traits\IntegerTrait;

    public function __construct ($value) {

        $this->set($value);
    }
}
