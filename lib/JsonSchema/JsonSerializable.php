<?php

namespace NielsHoppe\Goodies\JsonSchema;

trait JsonSerializable {

    protected static $properties;

    public function jsonSerialize () {

        $result = array();

        foreach (static::$properties as $name => $schema) {

            if (array_key_exists('property', $schema)) {

                $result[$name] = $this->$schema['property'];
            }
            elseif (array_key_exists('method', $schema)) {

                $result[$name] = call_user_func_array(array($this, $schema['method']), array());
            }
        }

        return $result;
    }
}
