<?php

namespace NielsHoppe\JSON\Examples;

class ExampleNumber implements \NielsHoppe\JSON\Types\JsonNumeric {

    use \NielsHoppe\JSON\Traits\NumberTrait;

    public function __construct ($value) {

        $this->set($value);
    }
}
