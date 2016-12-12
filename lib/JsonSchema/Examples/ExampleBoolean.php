<?php

namespace NielsHoppe\JSON\Examples;

class ExampleBoolean implements \NielsHoppe\JSON\Types\JsonBoolean {

    use \NielsHoppe\JSON\Traits\BooleanTrait;

    public function __construct ($value) {

        $this->set($value);
    }
}
