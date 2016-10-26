<?php

namespace NielsHoppe\Goodies\JsonSchema;

require('vendor/autoload.php');

$main = new Example('Fridolin');

print_r($main->jsonSerialize());
