<?php

namespace NielsHoppe\JSON\Examples;

class ExampleString implements \NielsHoppe\JSON\Types\JsonString {

    use \NielsHoppe\JSON\Traits\StringTrait;

    public function __construct ($value) {

        $this->set($value);
    }
}
