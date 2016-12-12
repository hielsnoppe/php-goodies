<?php

namespace NielsHoppe\JSON\Traits;

trait DictionaryTrait {

    protected static $itemSchema;
    private $items;

    public function set ($key, $value) {

        $this->items[$key] = $value;
    }

    public function get ($key) {

        if (array_key_exists($key, $this->items)) {

            return $this->items[$key];
        }

        return null;
    }

    public function jsonSerialize () {

        return $this->items;
    }
}
