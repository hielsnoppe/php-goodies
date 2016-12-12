<?php

namespace NielsHoppe\JSON\Examples;

class ExampleInteger implements \NielsHoppe\JSON\Types\JsonInteger {

    use \NielsHoppe\JSON\Traits\IntegerTrait;

    public function __construct ($value) {

        $this->set($value);
    }
}
