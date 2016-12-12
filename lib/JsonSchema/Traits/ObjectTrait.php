<?php

namespace NielsHoppe\JSON\Traits;

use \NielsHoppe\JSON\Types\JsonType;

trait ObjectTrait {

    //protected static $properties;

    /**
     * @return mixed[]
     */
    public function jsonSerialize () {

        $result = array();

        foreach ($this as $property => $value) {

            if ($value instanceof \JsonSerializable) {

                $result[$property] = $value->jsonSerialize();
            }
        }

        return $result;
    }

    /*
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
    */
}
