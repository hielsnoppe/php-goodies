<?php

namespace NielsHoppe\JSON\Traits;

trait NumberTrait {

    /**
     * @var float
     */
    private $value;

    /**
     * Returns the value of this
     * @return float
     */
    public function get () {

        return $this->value;
    }

    /**
     * Compares the value of this with another boolean value
     * @param float $value
     * @return float
     */
    public function is ($value) {

        return $this->value === floatval($value);
    }

    /**
     * Sets the value of this to the given boolean value
     * @param float $value
     */
    public function set ($value) {

        if (!is_numeric($value)) {

            return false;
        }

        $this->value = floatval($value);
    }

    /**
     * @return float
     */
    public function jsonSerialize () {

        return $this->get();
    }
}
