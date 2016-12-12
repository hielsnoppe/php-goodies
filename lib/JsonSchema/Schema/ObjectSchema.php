<?php

namespace NielsHoppe\JSON\Types;

interface JsonObject extends \JsonSerializable {

    public function jsonSerialize ();
}
