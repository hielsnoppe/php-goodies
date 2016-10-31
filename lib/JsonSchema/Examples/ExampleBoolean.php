<?php

namespace NielsHoppe\Goodies\JsonSchema\Examples;

class ExampleBoolean implements \NielsHoppe\Goodies\JsonSchema\Types\JsonBoolean {

    use \NielsHoppe\Goodies\JsonSchema\Traits\BooleanTrait;

    public function __construct ($value) {

        $this->set($value);
    }
}
