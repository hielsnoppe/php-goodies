<?php

namespace NielsHoppe\Goodies\JSON;

use \NielsHoppe\Goodies\JSON\Annotations\Property;

class Main extends JsonSerializable {

    /**
     * @var string $name
     * @Property(name="name")
     */
    private $name;

    public function __construct ($name) {

        $this->name = $name;
    }
}
