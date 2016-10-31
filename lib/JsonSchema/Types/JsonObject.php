<?php

namespace NielsHoppe\Goodies\JsonSchema\Types;

interface JsonObject extends \JsonSerializable {

    public function jsonSerialize ();
}
